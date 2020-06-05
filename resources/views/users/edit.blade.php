@extends('layout')
@section('titulo')
    Editar Usuario
@endsection
@section('contenido')
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <h1 class="display-4">Editar Usuario</h1>
        @if (session()->has('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
        <form class="bg-white shadow rounded py-3 px-4" action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="nombre">Nombre: </label>
                <input class="form-control bg-light shadow-sm @error('nombre') is-invalid @enderror"
                type="text" name="nombre" autocomplete="off" value="{{ $user->nombre }}">
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @enderror
            <label for="ap_paterno">Apellido Paterno:</label>
                <input class="form-control bg-light shadow-sm @error('ap_paterno') is-invalid @enderror"
                type="text" name="ap_paterno" autocomplete="off" value="{{ $user->ap_paterno }}">
                @error('ap_paterno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('ap_paterno') }}</strong>
                    </span>
                @enderror
            <label for="correo">Correo:</label>
                <input class="form-control bg-light shadow-sm @error('correo') is-invalid @enderror"
                type="email" name="correo" autocomplete="off" value="{{ $user->correo }}">
                @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('correo') }}</strong>
                    </span>
                @enderror
            <label for="edad">Edad:</label>
                <input class="form-control bg-light shadow-sm @error('edad') is-invalid @enderror"
                type="text" name="edad" autocomplete="off" value="{{ $user->edad }}">
                @error('edad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('edad') }}</strong>
                    </span>
            @enderror

            <label for="password">Password:</label>
                <input  class="form-control bg-light shadow-sm @error('password') is-invalid @enderror"
                type="text" name="password" autocomplete="off" value="{{ $user->password }}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @enderror
            <input class="btn btn-primary" type="submit" value="Registrar">
            <a href="{{route('users.index')}}" class="btn btn-secondary">Cancelar</a>
        </div>
        </form>
    </div>
</div>

@endsection