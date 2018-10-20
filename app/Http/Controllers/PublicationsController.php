<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Hashtag;
use App\Publications;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class PublicationsController extends Controller
{
    //
    public function __construct(){

    }

    public function index (Request $request){
    	if($request){
    		//busqueda por categoria
    		$query=trim($request->get('searchText'));
    		//$multimedia=DB::table('multimedia')
            $multimedia=Publications::
            //->join('category', 'multimedia.idmultimedia', '=', 'category.multimedia_idmultimedia')
            //->join('hashtag', 'category.hashtag_idhastag', '=', 'hashtag.idhastag')
            //$multimedia = Publications::

            //->where('Descripcion_Cargo', 'LIKE', $query . '%')
            //->where('count(category.multimedia_idmultimedia)', '>' , 0)
            //->select('multimedia.*')
    		orderBy('multimedia.created_at', 'desc')
            ->paginate(20)
    		;
    		//
    		//->where
    		return view('publication.index', ["multimedia"=>$multimedia, "searchText"=>$query]);
    	}
    }

    public function create (){
    	return view ('publication.create');
    }

    public function store (Request $request){
        return "Putos";
    }
    public function insert (Request $request){
        if ($request->session()->has('user')) {
            return response()->json(['fail', "Debe tener una sesion activa..."]);
        }

        $validatedData = $request->validate([
            'comment' => 'max:128',
        ]);

        $image = $request->file('file');
        $input = null;
        if(isset($image)){
            $input = uniqid().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $input);
        }

        if($input == null){
            return response()->json(['fail', "Debe subir una imagen valida"]);
        }

        $publication = new Publications;
        $publication->comment = $request->comment;
        $publication->route = $input;
        $publication->user_iduser = Auth::user()->iduser;

        $has =  explode(",",$request->has);
        //return $has;
        
        if($this->errorHashag($has) == true){
            return response()->json(['fail', "La imagen incita violencia"]);
        }
        
        //return $this->errorHashag($has) ? "hola" : "Feo";

        $publication->save();
        
        //get all the tags and convert in array
        foreach ($has as $key => $hash_tag) {
            //return $hash_tag;
            $create_tag = Hashtag::firstOrCreate(['hashtag' => $hash_tag]);

            $category = new Category;
            $category->hashtag_idhastag = $create_tag->idhastag;
            $category->multimedia_idmultimedia = $publication->idmultimedia;
            $category->save();
        }

        return response()->json(['success', "Se creo satisfactoriamente..."]); 
    }


    public function errorHashag($hashtag){
        $array = array("violencia", "crimen", "asesinato", "pedofilia", "pelea", "sangriento", "acuchillado", "acribillado", "duglas", "henry");


        foreach ($hashtag as $key => $value) {
            # code...
            if(in_array(strtolower($value), $array) == true) { //
                return true;
            }
        }
        return false;
    }
}
