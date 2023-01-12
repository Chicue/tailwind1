<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/master/master.css">
    <link rel="stylesheet" href="/css/others/index.css">

    <!--para mostrar iconos-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>footer</title>
</head>

<body class="bg-gray-300">




    <!--al ser un.svg hay que asignarle tamaño-->
    <div class="bg-secondary text-white flex justify-between items-center p-2">
        <div>
            <img class="h-8 m-2" src="img/logo-w.svg" alt="">
        </div>
        <div class="text-3xl m-2">&equiv;</div>
    </div>





   
    <main class="">
        <!--banner-->
        <!--bg-cover para que la imagen aparesca completa-->
        <!--las escalas de tamaño h-100 y h-80 se configuraron en tailwind.config.js-->
        <div class="h-56 md:h-100 bg-cover bg-no-repeat bg-center" style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
        </div>


        <!--container mx-auto-->
        <div class="mb-4 container mx-auto md:flex">

            <!-- w-1/2 la mitad de la pantalla / md: para tamaño mediano-->
            <div class="mt-4 mx-2 md:ml-2 md:mx-0 md:w-1/2 md:flex md:bg-white rounded-lg">
                <div>
                    <!--round-lg redondea los bordes / w-full ancho completo-->
                    <!--md:rounded-r-none sin redondeo cuando lado derecho-->
                    <img class="w-full md:w-48 md:h-full object-cover object-left rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=500" alt="">
                </div>
                <!--shadow-lg sombra-->
                <div class="relative mx-2 p-2 shadow-lg md:shadow-none bg-white md:bg-transparent rounded-lg -mt-2 text-gray-900">
                    <h2 class="text-xl md:text-lg tracking-tight font-bold uppercase">Pizza napolitana</h2>
                    <p class="text-gray-700 leading-snug">pizza napolitana con salsa de tomate cherry</p>
                    <div class="mt-2 text-sm font-semibold text-gray-700">COP 35000</div>
                    <div class="mt-2 text-xs text-yellow-600">&starf;&starf;&starf;&starf;&star; / 36 reseñas</div>
                </div>
            </div>

            <!-- w-1/2 la mitad de la pantalla / md: para tamaño mediano-->
            <div class="mt-4 mx-2 md:ml-2 md:mx-0 md:w-1/2 md:flex md:bg-white rounded-lg">
                <div>
                    <!--round-lg redondea los bordes / w-full ancho completo-->
                    <!--md:rounded-r-none sin redondeo cuando lado derecho-->
                    <img class="w-full md:w-48 md:h-full object-cover object-left rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=500" alt="">
                </div>
                <!--shadow-lg sombra-->
                <div class="relative mx-2 p-2 shadow-lg md:shadow-none bg-white md:bg-transparent rounded-lg -mt-2 text-gray-900">
                    <h2 class="text-xl md:text-lg tracking-tight font-bold uppercase">Pizza napolitana</h2>
                    <p class="text-gray-700 leading-snug">pizza napolitana con salsa de tomate cherry</p>
                    <div class="mt-2 text-sm font-semibold text-gray-700">COP 35000</div>
                    <div class="mt-2 text-xs text-yellow-600">&starf;&starf;&starf;&starf;&star; / 36 reseñas</div>
                </div>
            </div>

            <!-- w-1/2 la mitad de la pantalla / md: para tamaño mediano-->
            <div class="mt-4 mx-2 md:ml-2 md:mx-0 md:w-1/2 md:flex md:bg-white rounded-lg">
                <div>
                    <!--round-lg redondea los bordes / w-full ancho completo-->
                    <!--md:rounded-r-none sin redondeo cuando lado derecho-->
                    <img class="w-full md:w-48 md:h-full object-cover object-left rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=500" alt="">
                </div>
                <!--shadow-lg sombra-->
                <div class="relative mx-2 p-2 shadow-lg md:shadow-none bg-white md:bg-transparent rounded-lg -mt-2 text-gray-900">
                    <h2 class="text-xl md:text-lg tracking-tight font-bold uppercase">Pizza napolitana</h2>
                    <p class="text-gray-700 leading-snug">pizza napolitana con salsa de tomate cherry</p>
                    <div class="mt-2 text-sm font-semibold text-gray-700">COP 35000</div>
                    <div class="mt-2 text-xs text-yellow-600">&starf;&starf;&starf;&starf;&star; / 36 reseñas</div>
                </div>
            </div>

         

        </div>
        

    </main>






    <!--absolute bottom-0 para poner elemento en la parte de abajo forzandolo, pero si ya hay contenido entonces
    se puede reitrar ambos-->
    <footer class="w-full bg-secondary text-white">

        <div class="md:flex md:flex-row-reverse md:justify-around">
            <div class="ml-8 mt-4">
                <div class="hover:text-primary hover:cursor-pointer"><i class="fa fa-facebook"></i> /FACEBOOK</div>
                <div class="hover:text-primary hover:cursor-pointer"><i class="fa fa-twitter"></i> @PLATZIFOOD</div>
                <div class="hover:text-primary hover:cursor-pointer"><i class="fa fa-instagram"></i> @PLATZIFOOD</div>
            </div>
            <!--list-disc para que salgan puntos en las listas-->
            <ul class="ml-8 mt-4 mb-4 md:list-disc">
                <li>Soporte</li>
                <li>Aceca de nosotros</li>
                <li>Registro</li>
                <li>Aviso de privacidad</li>
            </ul>
        </div>
            
    </footer>

</body>

</html>