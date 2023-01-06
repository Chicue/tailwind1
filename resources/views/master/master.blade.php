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

<body class="">

    <section class="flex flex-wrap flex-col mx-auto mt-16 h-1/2 w-4/5 bg-slate-300">
        @yield('content')
    </section>

</body>

</html>