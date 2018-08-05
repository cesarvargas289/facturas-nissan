@extends('adminlte::layouts.app')

@section('contentheader_title')
    Modificar factura  {{ $factura->coche}} - {{ $factura->modelo}}
@endsection

@section('main-content')

    <form method="POST" action="{{ route('factura.update', $factura->id) }}">

        <!-- Hace la conversion de put a POST en el update-->
    {!! method_field('PUT') !!}

    <!-- Hace que se puedan enviar los datos del formulario
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        {!! csrf_field() !!}
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">

                    <form method="POST" action="{{ route('factura.store') }}">
                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="coche"> Marca  </label>
                                    <input type="text" class="form-control" name="marca" value="{{ $factura->marca}}">
                                    {!! $errors->first('marca', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="modelo"> Modelo </label>
                                    <input type="text" class="form-control" name="modelo" value="{{ $factura->modelo }}">
                                    {!! $errors->first('modelo', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="year"> Año </label>
                                    <input type="text" class="form-control" name="year" value="{{$factura->year }}">
                                    {!! $errors->first('year', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="precio"> Precio </label>
                                    <input type="text" class="form-control" name="precio" value="{{$factura->precio }}">
                                    {!! $errors->first('precio', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="no_serie"> Número de Serie </label>
                                    <input type="text"  class="form-control" name="no_serie" value="{{ $factura->no_serie }}">
                                    {!! $errors->first('no_serie', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="no_orden"> Número de Orden </label>
                                    <input type="text"  class="form-control" name="no_orden" value="{{ $factura->no_orden }}">
                                    {!! $errors->first('no_orden', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"> Descripción </label>
                            <textarea  class="form-control" name="descripcion" >{{($factura->descripcion) }}
                              {!! $errors->first('descripcion', '<span class=error>:message</span>')  !!}
                    </textarea>
                        </div>

                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </form>

@endsection