<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Abathu</title>
</head>
<body>
    <h2>Registrar medicamento</h2>
    <form action="http://localhost:8000/api/medicamentos" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="presentacion">Presentacion</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="stock" id="stock">
        <br>
        <button type="submit">Registrar</button>
</body>
</html>