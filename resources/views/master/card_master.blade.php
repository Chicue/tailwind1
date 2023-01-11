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

<!--min-h-screen alto del documento es del alto de la pantalla-->
<body class="min-h-screen bg-slate-400 mx-4 mb-8 md:flex md:flex-wrap">

    @yield('content')

</body>

</html>