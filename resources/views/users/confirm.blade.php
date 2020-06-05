@extends('layout')
@section('titulo')
    Confirmar para Eliminar
@endsection
@section('contenido')
<div class="row">
    <div class="col-12 col-sm-10 col-lg-8 mx-auto">
        <h1 class="display-4">Confirmar Eliminar Registro</h1>
        <h2 class="bg-danger">¿Desea Eliminar el registro de {{ $user->nombre }}  {{$user->ap_paterno }} ? </h2>
        <p class="bg-warning">La accion no puede deshacerse despues</p>
        <form style="display:inline" action="{{ route('users.destroy', $user->id) }}" 
            method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
        </form>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</div>
@endsection