<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // El nombre puede ser cualquiera pero por convencion al metodo encargado de mostrar la pagina principal se le llama index()
        return view('cursos.index');
    }

    public function create(){ // create() al metodo encargado de mostrar el formulario.
        return view('cursos.create');
    }

    public function show($curso){ // show() al método encargado de mostrar una sola pagina en particular.
        
        /* return view('cursos.show',['curso'=>$curso]); */ // debo pasar la variable con un array.
        
        return view('cursos.show', compact('curso')); // Otra forma de hacer lo mismo que arriba.
    }
}
