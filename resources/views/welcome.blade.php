<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Inicio</title>
            @vite('resources/css/app.css')
            <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
            />
            <style>

            </style>

        </head>

    <body class="bg-cyan-950">
        <div class="w-full flex flex-col w-full">
            <div class="bg-cyan-900 basis-full flex flex-row font-archivo">
                <span class="basis-4/12"></span>
                <h1 class="text-lg basis-1/12 p-3 text-center text-white hover:bg-cyan-700 hover:cursor-pointer">Experiencia</h1>
                <h1 class="text-lg basis-1/12 p-3 text-center text-white hover:bg-cyan-700 hover:cursor-pointer">Proyectos</h1>
                <h1 class="text-lg basis-1/12 p-3 text-center text-white hover:bg-cyan-700 hover:cursor-pointer">Sobre mí</h1>
                <h1 class="text-lg basis-1/12 p-3 text-center text-white hover:bg-cyan-700 hover:cursor-pointer">Contacto</h1>
                <span class="basis-4/12"></span>
            </div>
            <div class="container flex flex-row m-4 mx-auto">
                <figure class="">
                    <img class="h-64 w-64 rounded-full hover:cursor-pointer hover:scale-105 hover:opacity-75 hover:bg-gradient-to-br from-gray-800 to-gray-600 transition-transform duration-200"src="{{ asset('assets/portfolio_pic.jpg') }}" alt="portfolio pic">
                </figure>
                <div class="flex flex-col p-12 py-16">
                    <h1 class="text-center text-white font-semibold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl items-center content-center">David <span class="text-orange-700">Ibañez</span></h1>
                    <p class="text-white text-end text-2xl font-normal italic">
                        <span class="text">&lt;</span><span class="text-amber-600">Desarrollador</span> de Software/&gt;
                    </p>
                </div>
            </div>

        </div>
    </body>
</html>






{{-- <div class="initial_slot">
    <h1>
        Dashboard V1
    </h1>
</div>
<a href="{{route('users.index')}}">Ir al Listado de Usuarios</a>
<br>
<a href="{{ route('home.index')}}">Página de Inicio</a>

 --}}