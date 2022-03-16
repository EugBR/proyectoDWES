<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <form action="{{ url('/usuario/'.$usuario->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-5">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" value="{{ $usuario->Nombre }}" id="">
                </div>
                <div class="col-md-7">

                    <label for="Apellido">Apellidos</label>
                    <input type="text" name="Apellidos" class="form-control" value="{{ $usuario->Apellidos }}"
                        id=""><br>
                </div>
            </div>
            <div class="form-group">

                <label for="Email">Email</label>
                <input type="text" name="Email" class="form-control" value="{{ $usuario->Email }}" id=""><br>
            </div>
            <div class="form-group">

                <label for="Direccion">Direccion</label>
                <input type="text" name="Direccion" class="form-control" value="{{ $usuario->Direccion }}" id=""><br>
            </div>
            <input type="submit" value="Editar" style="margin-right:auto; margin-left:auto; display:flex;" class="btn btn-primary"><br>
            <a href="{{ url('usuario/') }}" style="text-align:center;">Volver a inicio</a>

        </form>

    </div>
    @endsection
</body>

</html>
