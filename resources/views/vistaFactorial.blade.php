<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <section class="containe mx-auto bg-slate-200">
        <h1 class="text-3xl text-center font-bold underline">
            Factorial
        </h1>
        <form action="{{ route('obtenerFactorial') }}" method="post">
            @csrf
            <input type="number" name="n" min="1" max="20" required>
            @error('n')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit">
                Calcular
            </button>
        </form>
        @isset($prod)
            <section>
                La factorial de {{ $n }} es: {{ $prod }}
            </section>
        @endisset
    </section>
</body>
</html>