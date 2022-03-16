<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="form-group">
            <form action="">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-cont" name="Nombre" id=""><br>

                <label for="Apellido">Apellidos</label>
                <input type="text" name="Apellidos" id=""><br>

                <label for="Email">Email</label>
                <input type="text" name="Email" id=""><br>

                <label for="Direccion">Direccion</label>
                <input type="text" name="Direccion" id=""><br>

                <input type="submit" value="Crear"><br>
                <a href="{{ url('usuario/') }}">Volver a inicio</a>

            </form>
        </div>
    </div>
    @endsection

</body>

</html>
