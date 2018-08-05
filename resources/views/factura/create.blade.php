@extends('adminlte::layouts.app')

@section('contentheader_title')
    Crear Factura
@endsection

@section('main-content')

    @if(session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @else

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <form method="POST" action="{{ route('factura.store') }}">
                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="marca"> Marca  </label>
                                    <input type="text" class="form-control" name="marca" value="{{ old('marca') }}">
                                    {!! $errors->first('marca', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="modelo"> Modelo </label>
                                    <input type="text" class="form-control" name="modelo" value="{{ old('modelo') }}">
                                    {!! $errors->first('modelo', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="year"> Año </label>
                                    <input type="text" class="form-control" name="year" value="{{ old('year') }}">
                                    {!! $errors->first('year', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="precio"> precio </label>
                                    <input type="text"  class="form-control" name="precio" value="{{ old('precio') }}">
                                    {!! $errors->first('precio', '<span class=error>:message</span>')  !!}
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="no_serie"> Número de Serie </label>
                                        <input type="text"  class="form-control" name="no_serie" value="{{ old('no_serie') }}">
                                        {!! $errors->first('no_serie', '<span class=error>:message</span>')  !!}
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="no_orden"> Número de Orden </label>
                                        <input type="text"  class="form-control" name="no_orden" value="{{ old('no_orden') }}">
                                        {!! $errors->first('no_orden', '<span class=error>:message</span>')  !!}
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="descripcion"> Descripción </label>
                            <textarea  class="form-control" name="descripcion" value="{{ old('descripcion') }}">
                              {!! $errors->first('descripcion', '<span class=error>:message</span>')  !!}
                    </textarea>
                        </div>

                    <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>

    @endif

@endsection

