@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modificar la tarea {{ $tareas->nombre }}</div>

                    @include('partials.errors')

                    <div class="card-body">
                        <form method='POST' action="/tareas/{{$tareas->id}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" value="{{ $tareas->nombre }}" name="nombre" />
                                <label for="contenido">Contenido</label>
                                <input type="textarea" class="form-control" value="{{ $tareas->contenido }}"
                                    name="contenido" />
                            </div>
                            <input type="submit" class="btn btn-block btn-dark" value="modificar tarea">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
