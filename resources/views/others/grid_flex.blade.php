@extends('master.master')

@section('title')
    <title>inicio</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/others/index.css">
@endsection

@section('content')
    <!--una columna-->
    <div class=“flex”>
        <div class="w-full p-4 bg-red-800"></div>
    </div>

    <!--dos columna-->
    <div class="flex">
        <div class="w-1/2 p-4 bg-green-800"></div>
        <div class="w-1/2 p-4 bg-green-600"></div>
    </div>

    <!--seis columna-->
    <!--flexgrap vuelve resposivo la grilla-->
    <div class="flex flex-wrap">
        <div
            class="w-1/6
            p-4 bg-blue-700"
            >
        </div>
        <div
            class="w-1/6 
            p-4 bg-blue-400"
        ></div>
        <div
            class="w-1/6
            p-4 bg-blue-600"
        ></div>
        <div
            class="w-1/6
            p-4 bg-blue-500"
        ></div>
        <div
            class="w-1/6
            p-4 bg-blue-300"
        ></div>
        <div
            class="w-1/6
            p-4 bg-blue-800"
        ></div>
    </div>

    <!--diseño responsivo de grilla con variavilidad de dispositivos-->
    <div class="flex flex-wrap m-4">
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-500 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-700 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-500 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-700 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-500 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-700 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-500 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-700 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-500 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-700 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-500 mb-1"
        ></div>
        <div
            class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 
            p-4 bg-green-700 mb-1"
        ></div>
    </div>


@endsection
