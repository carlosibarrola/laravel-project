<?php

namespace App\Http\Controllers; //Esto solo indica donde se encuentra el archivo

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // aca se escriben los metodos que administran las rutas
    public function __invoke() // El metodo __invoke() es para que el controlador administre una sola ruta
    {
        /* return view('welcome'); */
        return view('home');
    }
}
