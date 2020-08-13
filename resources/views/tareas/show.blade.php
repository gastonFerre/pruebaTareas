@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de la tarea <b>{{$tareas->nombre}}</b></div>
                <a href="/tareas" class="btn btn-info text-white">Volver a tareas</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Contenido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$tareas->id}}</td>
                            <td width='80%'>{{$tareas->contenido}}</td>
                            <td>
                            <form method="POST" action="/tareas/{{$tareas->id}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar tarea</button>
                            </form>
                            </td>
                            <td>
                            <form method="POST" action="/tareas/{{$tareas->id}}/edit">
                                @method("GET")
                                @csrf
                                <button type="submit" class="btn btn-danger">Modificar tarea</button>
                            </form>
                            </td>
                            </tr>    
                        </tbody>
                    </table>
                    @if($tareas->count())
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 