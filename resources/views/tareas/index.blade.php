@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tareas</div>
                <div class="card-body">
                    <a href="/tareas/create" class="btn btn-success btn-block">Añadir una nueva tarea</a>
                    <table class="table">
                        @if($tareas->count())
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tarea</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @endif
                        <tbody>
                            @forelse ($tareas as $tarea)
                            <tr>
                                <td>{{$tarea->id}}</td>
                            <td width='40%'>{{$tarea->nombre}}</td>
                            <td><a href="/tareas/{{$tarea->id}}" class="btn btn-dark">Ir a la tarea</a></td>
                            <td>
                            <form method="POST" action="/tareas/{{$tarea->id}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar tarea</button>
                            </form>
                            </td>
                            </tr>    
                            @empty
                            <tr>
                                <td colspan="3">
                                    <p class="alert alert-warning text-center">No hay tareas</p>
                                </td>
                            </tr>    
                            @endforelse
                        </tbody>
                    </table>
                    @if($tareas->count())
                    {{$tareas->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection   
    