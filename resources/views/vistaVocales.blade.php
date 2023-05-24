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
            Numero de Vocales
        </h1>
        <form action="{{ route('obtenerVocales') }}" method="post">
            @csrf
            <input type="text" name="texto" required>
            @error('texto')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit">
                Calcular
            </button>
        </form>
        @isset($vocal)
            <section>
                La cadena=" {{ $texto }} " tiene: {{ $vocal }} Vocales
            </section>
        @endisset
    </section>
</body>
</html>