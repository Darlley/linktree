<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-indigo-200">
        <div class="container mx-auto">
            <div class="w-full h-screen bg-indigo-400 flex flex-col items-center justify-around">

                <div>
                    <nav>
                        <ul class="flex">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Registrar</a></li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <span>Imagem</span>
                </div>

                <div>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
