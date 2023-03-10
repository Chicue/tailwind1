@extends('master.master')

@section('title')
    <title>Display</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/others/index.css">
@endsection

@section('content')

    <div class="flex flex-wrap flex-row pt-2">
        <div class="w-1/2 text-justify p-5">
            <ul class="list-disc p-5">
                <li>
                    <p>
                    block ocupa todo el espacio disponible es el por defecto, 
                    inline-block ocupa solo lo que ocupa su contenido,
                    inline, 
                    hidden desaparece el contenido
                    </p>
                </li>
            </ul>
        </div>
        <div class="w-1/2">
            <!--block ocupa todo el espacio disponible es el por defecto, 
                inline-block ocupa solo lo que ocupa su contenido
                inline 
                hidden desaparece-->
            <div class="mx-5 mb-5 p-2 mt-8 bg-blue-900">
                <div class="inline-block bg-gray-300 px-4 py-4 mt-2">1</div>
                <div class="inline-block bg-blue-300 px-4 py-4 mt-2">2</div>
                <div class="inline bg-green-300 px-4 py-4 mt-2">3</div>
                <div class="hidden bg-green-300 px-4 py-4 mt-2">4</div>
            </div>
        </div>        
    </div>


@endsection