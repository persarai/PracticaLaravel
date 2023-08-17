<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Muestra de show o otro</h1>
    @if ($nombreusuario)
        <h2>Hola usuario este es tu ID{{$IDusuario}} y nombre {{$nombreusuario}}</h2>
    @else
        <h2>Hola usuario este es tu ID{{$IDusuario}}</h2>
    @endif

</body>
</html>