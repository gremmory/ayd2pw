<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Hashtag;
use App\Publications;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Rank;

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
            ->paginate(10)
    		;
    		return view('publication.index', ["multimedia"=>$multimedia, "searchText"=>$query, "my" => 0]);
    	}
    }

    public function store (Request $request){
        return "Putos";
    }

    public function show ($id){
        $multimedia=Publications::
        join('category', 'multimedia.idmultimedia', '=', 'category.multimedia_idmultimedia')
        ->where('category.hashtag_idhastag', '=', $id)
        ->select('multimedia.*')
        ->orderBy('multimedia.created_at', 'desc')
        ->paginate(10) ;
        return view("publication.index", ["multimedia"=>$multimedia, "my" => 0]);
    }

    public function morelike(Request $request){
        $multimedia=Publications::
        join('rank as ll', 'll.multimedia_idmultimedia', '=', 'multimedia.idmultimedia')
        //->select('multimedia.*')
        ->select(DB::raw('multimedia.*, count(ll.multimedia_idmultimedia) as likes'))
        ->where('ll.like', '=', 1)
        ->groupby('ll.multimedia_idmultimedia')
        ->orderBy('likes', 'desc')
        //->get();
        ->paginate(10);

        return view('publication.index', ["multimedia"=>$multimedia, "my" => 0]);
    }   

    public function moredislike(Request $request){
        $multimedia=Publications::
        join('rank as ll', 'll.multimedia_idmultimedia', '=', 'multimedia.idmultimedia')
        //->select('multimedia.*')
        ->select(DB::raw('multimedia.*, count(ll.multimedia_idmultimedia) as likes'))
        ->where('ll.like', '=', 2)
        ->groupby('ll.multimedia_idmultimedia')
        ->orderBy('likes', 'desc')
        //->get();
        ->paginate(10);

        return view('publication.index', ["multimedia"=>$multimedia, "my" => 0]);
    }   

}
