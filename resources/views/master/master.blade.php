<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/master/master.css">
    @yield('css')
    @yield('title')
</head>

<body class="bg-fondo">

    <!--<header class="bg-blue-300">
        <nav>
           <h3>texto</h3> 
        </nav>
    </header>-->

    <section>
        @yield('content')
    </section>

    <footer>
      
    </footer>

    
</body>

</html>