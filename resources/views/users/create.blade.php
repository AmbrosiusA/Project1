@extends('layout')
@section('titulo')
    Crear Usuario
@endsection
@section('contenido')
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
@if (session()->has('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
    <h1 class="display-4">Nuevo Usuario</h1>
        <form class="bg-white shadow rounded py-3 px-4" action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">

                <label for="nombre">Nombre:</label>
                <input class="form-control bg-light shadow-sm @error('nombre') is-invalid @enderror" 
                id="nombre" placeholder="Nombre..." autocomplete="off" type="text" name="nombre" value="{{old('nombre')}}">  
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @enderror
                <label for="ap_paterno">Apellido Paterno: </label>
                    <input class="form-control bg-light shadow-sm @error('ap_paterno') is-invalid @enderror"
                     placeholder="Apellido Paterno..." autocomplete="off" id="ap_paterno" type="text" name="ap_paterno" value="{{old('ap_paterno')}}">
                    @error('ap_paterno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('ap_paterno') }}</strong>
                    </span>
                @enderror
                <label for="correo">Correo:</label>
                    <input class="form-control bg-light shadow-sm @error('correo') is-invalid @enderror"
                    type="email" name="correo" autocomplete="off" placeholder="Example@mail.com" id="correo" value="{{old('correo')}}">
                    @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('correo') }}</strong>
                    </span>
                @enderror
                <label for="edad">Edad:</label>
                    <input class="form-control bg-light shadow-sm @error('edad') is-invalid @enderror"
                    type="text" name="edad" placeholder="Edad" autocomplete="off" id="edad" value="{{old('edad')}}">
                    @error('edad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('edad') }}</strong>
                    </span>
                @enderror
                <label for="password">Password: </label>
                    <input class="form-control bg-light shadow-sm @error('password') is-invalid @enderror"
                    type="password" placeholder="Password" name="password" autocomplete="off" id="password" value="{{old('password')}}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @enderror
            </div>    

            <input class="btn btn-primary" type="submit" value="Registrar">
        </form>
    </div>
</div>
@endsection