@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear una nueva tarea</div>
               
                @include('partials.errors')

                <div class="card-body">
                <form method='POST' action="/tareas">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre"/>
                    <label for="contenido">Contenido</label>
                    <input type="textarea" class="form-control" name="contenido"/>
                </div>
                <input type="submit" class="btn btn-block btn-dark" value="Crear tarea">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection