@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso) {{-- El punto es para concatenar la variable--}}
    
@section('content')
    <h1>Bienvenido al curso: {{$curso}} </h1> {{-- Dobles llaves para poner variables. Directivas de Blade --}}
@endsection
