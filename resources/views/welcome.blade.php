<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        
    </head>
    <body >
        <section >
                <div class=" mx-auto bg-slate-500">
                    <h1 class="text-3xl text-center font-bold underline">
                        Ejercicios de programacion Practica#5
                    </h1>
                </div>
                
            <div class=" grid grid-cols-1 gap-2 justify-self-center self-center w-72 pt-4 bg-red-500 mx-auto my-8 ">
                <div class="" >
                    <a href="{{route('factorial')}}">Factorial</a>
                </div>
                <div>
                    <a href="{{route('fibonacci')}}">1.- Fibonacci</a>
                </div>
                <div>
                    <a href="{{route('Palabras')}}">2.- Numero de palabras</a>
                </div>
                <div>
                    <a href="{{route('Vocales')}}">3.- Numero de Vocales</a>
                </div>
                <div>
                    <a href="{{route('Perfectos')}}">4.- Numero Perfectos</a>
                </div>
           
            </div>  
        </section>
        
    </body>
</html>
