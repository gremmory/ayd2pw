@extends('layouts.master')
@section('contenido')


<div class="row">
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar Perfil</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-5 pr-1">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="col-md-7 pl-1">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 pr-1">
                        <div class="form-group">
                            <label>Nombre Comple</label>
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label>Edad</label>
                            <input type="number" class="form-control" placeholder="Edad" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address</label>
                            <select class="form-control" >
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 pr-1">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto de Perfil</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-user">
        <div class="card-image">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
        </div>
        <div class="card-body">
            <div class="author">
                <a href="#">
                    <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                </a>
                <p class="description">
                    michael24
                </p>
            </div>
            <p class="description text-center">
                "Lamborghini Mercy
                <br> Your chick she so thirsty
                <br> I'm in that two seat Lambo"
            </p>
        </div>
        <hr>
        <div class="button-container mr-auto ml-auto">
            <button href="#" class="btn btn-simple btn-link btn-icon">
                <i class="fa fa-facebook-square"></i>
            </button>
            <button href="#" class="btn btn-simple btn-link btn-icon">
                <i class="fa fa-twitter"></i>
            </button>
            <button href="#" class="btn btn-simple btn-link btn-icon">
                <i class="fa fa-google-plus-square"></i>
            </button>
        </div>
    </div>
</div>
</div>

@endsection