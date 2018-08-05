@extends('adminlte::layouts.app')

@section('contentheader_title')
    Modificar Rol  {{ $rol->name }}
@endsection

@section('main-content')

    <form method="POST" action="{{ route('rol.update', $rol->id) }}">

        <!-- Hace la conversion de put a POST en el update-->
    {!! method_field('PUT') !!}

    <!-- Hace que se puedan enviar los datos del formulario
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        {!! csrf_field() !!}
        <p><label for="description">
                Descripción
                <input type="text" name="description" value="{{ $rol->description }}">
                {!! $errors->first('description', '<span class=error>:message</span>')  !!}
            </label></p>

        <input type="submit" value="Enviar">
    </form>

@endsection