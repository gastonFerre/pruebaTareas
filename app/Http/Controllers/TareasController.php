<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class TareasController extends Controller
{
    public function index() {
        
        $tareas = Tareas::paginate(2);
        return view('tareas.index', compact('tareas'));

    }

    public function create () {
        return view ('tareas.create');
    }
    
    public function change (int $id) {
        $tareas = Tareas::findOrFail($id);
        return view ('tareas.change', compact('tareas'));
    }

    public function store() {
        $this->validate(request(), [
            'nombre' => 'required',
            'contenido' => 'required'
        ]);

    Tareas::create(request()->only('nombre','contenido'));
    return redirect(route('tareas.index'));

    }

    public function show (int $id) {
        $tareas = Tareas::findOrFail($id);
        return view ('tareas.show', compact('tareas'));
    }

    public function destroy (int $id) {
        if (request()-> isMethod('DELETE')) {
            try { 
                $tareas = Tareas::findOrFail($id);
                $tareas->delete();
                return redirect(route('tareas.index'));
            }
            catch (Exception $exception) {
                dd($exception);
            }
        }
    }
}

