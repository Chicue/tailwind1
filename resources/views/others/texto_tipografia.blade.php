@extends('master.master')

@section('title')
    <title>Texto y tipografia</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/others/index.css">
@endsection

@section('content')
    
<!--sans , sans-serif, mono son los tipos de letra , sans es el por defecto-->
<!--font-sans , font-serif, font-mono-->
<!--text-xl si le coloco un numero aumenta text-3xl-->
<!--text-xs si le coloco un numero aumenta text-3xs-->

    <h3 class="text-3xl font-serif bg-green-400 mx-auto mt-20 h-20 w-1/2 pt-5 pl-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et adipisci culpa delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quasi illo nobis impedit voluptatibus unde ab adipisci tenetur veniam deleniti!
    </h3>

    <h3 class="text-xs  font-mono bg-red-400 mx-auto mt-20 h-20 w-1/2 pt-5 pl-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et adipisci culpa delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quasi illo nobis impedit voluptatibus unde ab adipisci tenetur veniam deleniti!
    </h3>
 
    <ul class="text-4xl bg-slate-500 mt-10 mx-auto w-1/2">
        <li>
            <p class="italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nostrum esse, modi quaerat harum quod aliquid nobis eaque aliquam molestias excepturi? Minus non magnam aperiam nemo, fuga similique vitae eos?</p>
        </li>
        <li class="font-bold">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consequuntur alias aspernatur tempore quaerat, quidem, tempora illum veritatis quam unde vitae voluptatem vel? Possimus magnam eum magni iste, ipsum doloribus!</p>
        </li>
        <li class="font-extrabold">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ut, corporis esse eligendi dolore natus aliquid tempora eius consequatur aut ipsa iure aperiam atque. Minima eveniet adipisci nam consequuntur aut.</p>
        </li>
        <li class="font-light">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nobis a voluptatum optio dolorem ratione atque. Distinctio dolorum inventore voluptates nostrum odit, deleniti possimus esse sequi consectetur tempore facilis maiores.</p>
        </li>
    
    </ul>

    <!--espaciamiento entre letras tracking-tight tracking-tighter tracking-widest tracking-wide
        espaciamielto entre lineas leading-tight
        alineamiento text-center text-justify text-left text-rigth
        line-trough texto tachado
        underline subrayado
        no-underline subrayado
        uppercase letra mayuscula
        capitalize pimera mayuscula
        lowercase letra minuscula-->
    <h1 class="my-8 no-underline text-4xl tracking-wide leading-loose text-justify capitalize">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quaerat fugiat unde consectetur excepturi. Nihil odit, enim tempore velit id fugit similique veniam ipsum nam, corporis ex, neque voluptate inventore?
    </h1>

@endsection
