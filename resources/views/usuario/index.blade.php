<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('usuario/create') }}" class="btn btn-success">Crear nuevo usuario</a><br><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->Nombre }}</td>
            <td>{{ $usuario->Apellidos }}</td>
            <td>{{ $usuario->Email }}</td>
            <td>{{ $usuario->Direccion }}</td>
            <td>{{ $usuario->Borrar}}</td>
            <td>

            <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning"  style="margin-left:-13em;">Editar</a>
            
            <form action="{{ url('/usuario/'.$usuario->id ) }}" method="post" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger">
            </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
    
</div>
@endsection
</body>
</html>

