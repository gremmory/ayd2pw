@extends('layouts.master')
@section('contenido')



<div class="row justify-content-center">

    @foreach ($multimedia as $an)

    @if (count($an->category) > 0)
    <div class="col-4">
        <div class="card card-user">
            <img src="{{ url('/img/' . $an->route) }}" alt="...">
            <div > <!-- class="card-body" -->
                <p class="description text-center">
                    "{{$an->comment}}"
                </p>
            </div>
            <hr>
            <div class="button-container mr-auto ml-auto">
                @foreach ($an->category as $ca)
                <a href=""> URL::action('FasesController@edit', {{$ca->hashtag_idhastag}})
                    <i class="btn btn-info"> {{$ca->hashtag->hashtag}} </i>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @endforeach


    <div class="col-4">
        <div class="card card-user">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
            <div > <!-- class="card-body" -->
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container mr-auto ml-auto">
                <a href="">
                    <i class="btn btn-info"> Editar </i>
                </a>
                <a href="">
                    <i class="btn btn-info"> Editar </i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card card-user">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
            <div > <!-- class="card-body" -->
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container mr-auto ml-auto">
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-facebook-square">Etiqueta_1</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-twitter">Etiqueta_2</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-google-plus-square">Etiqueta_3</i>
                </button>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <br><br><br>
    <div class="col-4">
        <div class="card card-user">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
            <div > <!-- class="card-body" -->
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container mr-auto ml-auto">
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-facebook-square">Etiqueta_1</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-twitter">Etiqueta_2</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-google-plus-square">Etiqueta_3</i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card card-user">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
            <div > <!-- class="card-body" -->
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container mr-auto ml-auto">
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-facebook-square">Etiqueta_1</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-twitter">Etiqueta_2</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-google-plus-square">Etiqueta_3</i>
                </button>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <br><br><br>
    <div class="col-4">
        <div class="card card-user">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
            <div > <!-- class="card-body" -->
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container mr-auto ml-auto">
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-facebook-square">Etiqueta_1</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-twitter">Etiqueta_2</i>
                </button>
                <button href="#" class="btn btn-simple btn-link btn-icon">
                    <i class="fa fa-google-plus-square">Etiqueta_3</i>
                </button>
            </div>
        </div>
    </div>
</div>


@endsection