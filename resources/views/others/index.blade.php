@extends('master.master')

@section('title')
    <title>Inicio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/others/index.css">
@endsection

@section('content')

    <div class="flex flex-wrap mt-5 P-8 justify-around mx-auto">
        <a class="bg-lime-900 rounded-lg mr-3 mt-3 p-5 text-white" href="/grid">FLEX BOX</a>
        <a class="bg-lime-800 rounded-lg mr-3 mt-3 p-5 text-white" href="/display">DISPLAY</a>
        <a class="bg-lime-700 rounded-lg mr-3 mt-3 p-5 text-white" href="/dimensiones">DIMENSIONES Y ESPACIOS</a>
        <a class="bg-lime-600 rounded-lg mr-3 mt-3 p-5" href="/flex">GRID FLEX</a>
        <a class="bg-lime-500 rounded-lg mr-3 mt-3 p-5" href="/texto">TEXTO Y TIPOGRAFIA</a>
        <a class="bg-lime-400 rounded-lg mr-3 mt-3 p-5" href="/utilerias">UTILERIAS</a>
        <a class="bg-lime-300 rounded-lg mr-3 mt-3 p-5 mb-8" href="/variantes">VARIANTES Y PSEUDOCLASES</a>
    </div>
@endsection