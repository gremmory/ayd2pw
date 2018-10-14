@extends('layouts.master')
@section('contenido')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Realizar Publicacion</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">

                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Publicacion de Imagen</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Comentario</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Etiquetas</label>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Nuevo</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection