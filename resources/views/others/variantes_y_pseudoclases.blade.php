@extends('master.master')

@section('title')
    <title>Utilerias</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/others/index.css">
@endsection

@section('content')

<div class="flex flex-wrap flex-row mt-2">
    <div class="text-justify w-1/2 p-5">
        <p>en el archivo tailwind.config.js se agrega la variante disabled en la seccion variants</p>
    </div>
    <div class="w-1/2">
        <!--en el archivo tailwind.config.js se agrega la variante disabled en la seccion variants-->
        <div class="mt-20 ml-20">
            <button disabled class="disabled:opacity-25 bg-amber-500">
                submit
            </button>
        </div>  
    </div>
</div>


    


@endsection