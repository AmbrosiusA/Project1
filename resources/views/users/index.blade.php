@extends('layout')
@section('titulo')
    Lista de Usuarios
@endsection
@section('contenido')
    <center><h1 class="display-4 ">Administrar Usuarios</h1></center>
    @if (session()->has('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    @if($users->isEmpty())
        <h2>no hay usuarios en la base de datos</h2>
    @else
        <h2 class="display-4">Usuarios Existentes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Edad</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->ap_paterno }}</td>
                        <td>{{ $user->edad }}</td>
                        <td>
                            <a class="btn btn-info" 
                            href="{{ route('users.edit', $user->id) }}">Editar</a>
                            <a class="btn btn-danger" href="{{ route('users.confirm', $user->id) }}">Eliminar</a>
    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <center><a class="btn btn-primary" href="{{ route('users.create') }}">Crear nuevo usuario</a></center>
@endsection