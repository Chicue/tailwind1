@extends('master.master')

@section('title')
    <title>Flex blox</title>
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
                        por defecto flex esta en flex-row, horizontal
                    </p>
                </li>
                <li>
                    <p>
                        flex-col vertical
                    </p>
                </li>
                <li>
                    <p>
                        flex-row-reverse horizontal invertido
                    </p>
                </li>
                <li>
                    <p>
                        flex-col-reverse horizontal invertido
                    </p>
                </li>
                <li>
                    <p>
                        flex justify-start es el por defecto
                    </p>
                </li>
                <li>
                    <p>
                        flex justify-end pociciona los elementos al final
                    </p>
                </li>
                <li>
                    <p>
                        flex justify-between mismo espacios entre los elementos empezando por los extremos
                    </p>
                </li>
                <li>
                    <p>
                        flex justify-around mismo espacios entre los elementos
                    </p>
                </li>
                <li>
                    <p>
                        flex items-center alinear en eje vertical central
                    </p>
                </li>
                <li>
                    <p>
                        flex items-start alinear en eje vertical superior
                    </p>
                </li>
                <li>
                    <p>
                        flex items-end alinear en eje vertical inferior
                    </p>
                </li>
                <li>
                    <p>
                        flex items-stretch se extienden en el eje y
                    </p>
                </li>
                <li>
                    <p>
                        flex items-baseline , elementos se van a alinerar a la base del texto
                        order-1 orden en el que se muestran los items
                    </p>
                </li>
            </ul>
        </div>
        <div class="w-1/2">
            <div class="m-8">
                <!--por defecto flex esta en flex-row, horizontal-->
                <div class="flex bg-purple-300 p-8">
                    <div class="bg-purple-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-purple-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-purple-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-purple-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-purple-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex-col vertical-->
                <div class="flex flex-col bg-blue-300 p-8">
                    <div class="bg-blue-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex-row-reverse horizontal invertido-->
                <div class="flex flex-row-reverse bg-green-300 p-8">
                    <div class="bg-green-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-green-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-green-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-green-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-green-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex-col-reverse horizontal invertido-->
                <div class="flex flex-col-reverse bg-yellow-300 p-8">
                    <div class="bg-yellow-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-yellow-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-yellow-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-yellow-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-yellow-500 px-4 py-2 mt-2">elemento 5</div>
                </div>


                <!--flex justify-start es el por defecto-->
                <div class="flex justify-start bg-gray-300 p-8">
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex justify-end pociciona los elementos al final-->
                <div class="flex justify-end bg-gray-300 p-8">
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex justify-between mismo espacios entre los elementos empezando por los extremos-->
                <div class="flex justify-between bg-gray-300 p-8">
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex justify-around mismo espacios entre los elementos-->
                <div class="flex justify-around bg-gray-300 p-8">
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-gray-500 px-4 py-2 mt-2">elemento 5</div>
                </div>


                <!--flex items-center alinear en eje vertical central-->
                <div class="h-64 flex justify-around items-center bg-red-300 p-8">
                    <div class="bg-red-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-red-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-red-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-red-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-red-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex items-start alinear en eje vertical superior-->
                <div class="h-64 flex justify-around items-start bg-indigo-300 p-8">
                    <div class="bg-indigo-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-indigo-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-indigo-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-indigo-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-indigo-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex items-end alinear en eje vertical inferior-->
                <div class="h-64 flex justify-around items-end bg-pink-300 p-8">
                    <div class="bg-pink-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-pink-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-pink-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-pink-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-pink-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex items-stretch se extienden en el eje y-->
                <div class="h-64 flex justify-around items-stretch bg-orange-300 p-8">
                    <div class="bg-orange-500 px-4 py-2 mt-2">elemento 1</div>
                    <div class="bg-orange-500 px-4 py-2 mt-2">elemento 2</div>
                    <div class="bg-orange-500 px-4 py-2 mt-2">elemento 3</div>
                    <div class="bg-orange-500 px-4 py-2 mt-2">elemento 4</div>
                    <div class="bg-orange-500 px-4 py-2 mt-2">elemento 5</div>
                </div>
                <!--flex items-baseline , elementos se van a alinerar a la base del texto
                    order-1 orden en el que se muestran los items-->
                <div class="h-64 flex justify-around items-baseline bg-blue-300 p-8">
                    <div class="text-white order-3">elemento 1</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2 order-4">elemento 1</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2 order-5">elemento 2</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2 order-1">elemento 3</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2 order-10">elemento 4</div>
                    <div class="bg-blue-500 px-4 py-2 mt-2 order-2">elemento 5</div>
                </div>
            </div>

    </div>


</div>

@endsection