<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" id="" placeholder="Nombre">
                </div>
                <div class="col-md-7">
                    <label for="Apellido">Apellidos</label>
                    <input type="text" name="Apellidos" class="form-control" id="" placeholder="Apellidos"><br>
                </div>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" name="Email" class="form-control" id="" placeholder="Email"><br>
            </div>
            <div class="form-group">
                <label for="Direccion">Direccion</label>
                <input type="text" name="Direccion" class="form-control" id="" placeholder="Direccion"><br>
            </div>
            <input type="submit" value="Crear" style="margin-right:auto; margin-left:auto; display:flex;"  class="btn btn-primary"><br>
            <a href="{{ url('usuario/') }}">Volver a inicio</a>




        </form>
    </div>
    @endsection

</body>

</html>
