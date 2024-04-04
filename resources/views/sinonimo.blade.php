<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Sinonimos</title>
</head>
<body>
    <div class = titulos>
       <h1>
           Sinonimos
       </h1> 
    </div>
    <div class="formulario">
    <form method="POST" action="{{ route('clave') }}"> 
        @csrf
        <label for="palabra">Palabra:</label>
        <input type="text" name="palabra" id="palabra">
        <div class = botones>
            <button type="submit">Buscar Sinónimos</button>
        </div>
    </form>
    @if(isset($sinonimos))
    <p>Los sinónimos de "{{ $palabra->nombre }}" son: {{ implode(', ', $sinonimos) }}</p>
    @endif
    @if(isset($mensaje))
    <p>{{$mensaje}}</p>
    @endif

    <div class=aclaracion><p>Para esta aplicacion se utilizo un JSON para llenar mi BD, la primer palabra se usa como la principal
        y esta es la unica reconocida para buscar sinonimos, esto mediante una tabla pivote relacionandolos con una tabla exclusiva para sinonimos.
    </p></div>
</div>
</body>
<footer>
    <p>Proyecto: JRMB</p>
</footer>
</html>