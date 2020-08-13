<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use Exception;

class TareasController extends Controller
{
    public function index()
    {

        $tareas = Tareas::paginate(2);
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        return view('tareas.create');
    }

    public function edit(int $id)
    {
        $tareas = Tareas::findOrFail($id);
        return view('tareas.edit', compact('tareas'));
    }

    public function update(Request $request, $id)
    {
        $tareas = Tareas::findOrFail($id);
        $tareas -> nombre = $request -> nombre;
        $tareas -> contenido = $request -> contenido;
        $tareas -> save();
        return redirect('/tareas');
    }

    public function store()
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'contenido' => 'required'
        ]);

        Tareas::create(request()->only('nombre', 'contenido'));
        return redirect(route('tareas.index'));
    }

    public function show(int $id)
    {
        $tareas = Tareas::findOrFail($id);
        return view('tareas.show', compact('tareas'));
    }

    public function destroy(int $id)
    {
        if (request()->isMethod('DELETE')) {
            try {
                $tareas = Tareas::findOrFail($id);
                $tareas->delete();
                return redirect(route('tareas.index'));
            } catch (Exception $exception) {
                dd($exception);
            }
        }
    }
}
