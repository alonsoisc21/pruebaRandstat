<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Tareas Pendientes</title>
</head>
<body>
    <p>Hola Buen Día!.</p>
    <p>Anexo las tareas pendientes!.</p>
    @foreach ($tareasPendientes as $element)
        <div clas="row col-12">
            <div class="col-8">{{$element['descripcion']}}</div>
        </div>
        <br>
        <hr>
    @endforeach
</body>
</html>