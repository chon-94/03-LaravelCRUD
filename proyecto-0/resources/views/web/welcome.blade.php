<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite('resources/css/app.css')

    <!-- Custom Styles -->
    <style>
        /* Add custom styles in an external CSS file or here */
    </style>
</head>

<body class="antialiased">

    <!-- NAV BAR -->
    <nav class="relative mx-auto flex-wrap sm:justify-start sm:flex-nowrap z-50 w-11/12 bg-yellow-100 rounded-full text-sm py-2 border-3 border-black hover:bg-orange-100">
        <div class="container mx-auto flex flex-wrap items-center">

            <!-- NOMBRE Y LOGO -->
                <div class="flex w-full md:w-1/2 justify-center md:justify-start font-extrabold">
                    <a href="{{ route('welcome') }}" class="text-black">FEMA Ingenieros</a>
                </div>
            <!-- NOMBRE Y LOGO -->

            <!-- OPCIONES PRINCIPALES -->
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">

                    <!-- Contacto -->
                    <li class="mr-5">
                        <a href="{{ route('contacto') }}" class="px-4 text-black">Contacto</a>
                    </li>

                    <!-- Acerca de -->
                    <li class="mr-5">
                        <a href="{{ route('about') }}" class="px-4 text-black">about</a>
                    </li>

                </ul>

                <!-- Contenedor Autenticación -->
                <div>
                    <ul class="flex items-center">
                        <!-- Autenticación -->
                        @if (Route::has('login'))
                        <li class="mr-6">
                            <div class="text-right">
                                @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                                @endauth
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>
            <!-- OPCIONES PRINCIPALES -->

        </div>
    </nav>
    <!-- NAV BAR -->

        <!-- Contenido principal aquí -->
















        
        <!-- CAROUSEL -->
        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
            <!-- BOTONES -->
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- IMAGENES -->
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active float-left w-full">
                    <img src="/images/construccion3.jpg" class="card-height-3 block w-full img-responsive" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="/images/construccion2.jpg" class="card-height-3 block w-full img-responsive" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="/images/construccion5.jpg" class="card-height-3 block w-full img-responsive" />
                </div>
            </div>
                <!-- IZQUIERDA -->
                <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <!-- DERECHA -->
                <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
        <!-- CAROUSEL -->  



















        



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoFeh1HGFe2aMRzKxBe1A5sQ1mVVXp3QswNJmxJR7Q7Mw6F" crossorigin="anonymous"></script>
</body>

</html>
 