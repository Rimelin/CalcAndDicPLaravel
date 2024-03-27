<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Calculadora</title>
</head>
<body>
    <div class= "titulos"> 
        <h1>Calculadora</h1>
    </div>   
    <div class = formulario>
        <form method="POST" action="{{ route('operacion') }}">
            @csrf
            <input type="hidden" name="operacion" id="operacion">
            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" id="numero1">
            <br>
            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" id="numero2">
            <br>
            <div class = botones>
                <button type="submit" onclick="document.getElementById('operacion').value = 'suma';">Sumar</button>
                <button type="submit" onclick="document.getElementById('operacion').value = 'resta';">Restar</button>
                <button type="submit" onclick="document.getElementById('operacion').value = 'multiplicacion';">Multiplicar</button>
                <button type="submit" onclick="document.getElementById('operacion').value = 'division';">Dividir</button>
            </div>
        </form>
        @isset($resultado,$operacion,$numero1,$numero2)
            <p>El resultado de la {{$operacion}} entre {{$numero1}} y {{$numero2}} es: {{ $resultado }}</p>
        @endisset
    </div> 
    <div class = aclaracion>
            <p>Nota: Si no aparece el resultado deseado verificar que esten llenos los dos campos</p>
    </div>
</body>
<footer>
    <p>Proyecto: JRMB</p>
</footer>
</html>
