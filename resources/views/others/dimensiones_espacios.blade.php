@extends('master.master')

@section('title')
    <title>Dimensiones y espaciado</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/others/index.css">
@endsection

@section('content')
  
    <!--h es heigth y los tamaños e tailwind estan definidos en rem-->
    <!--w es width-->
    <h1 class="h-32 w-32 bg-gray-500 text-red-500">
        basica
    </h1>
    <!--tailwind tambien permite el manejo de tamaño por porcentaje que son representado en fracciones-->
    <!--pt padding superior , pl padding izquierdo-->
    <!--mt margin superior , ml margin izquierdo-->
    <h1 class="h-32 w-1/2 pt-8 pl-4 ml-8 mt-10 bg-green-500 text-blue-500">
        compleja
    </h1>
    <!--my mismo espacio arriba y abajo, mx mismo espacio a los laterales-->
    <h1 class="my-8 mx-8 bg-purple-500 text-orange-500">
        mas compleja
    </h1>
    <!--mx-auto centra el elemento-->
    <h1 class="w-1/5 mx-auto bg-yellow-500 text-indigo-500">
        mas compleja
    </h1>

@endsection
