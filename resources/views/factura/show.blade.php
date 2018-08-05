@extends('adminlte::layouts.app')

@section('contentheader_title')
   {{ $factura->marca }} - {{ $factura->modelo }}
@endsection

@section('main-content')


    <section class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    <table class="table table-condensed table-hover text-muted">

                        <tr>
                            <td><strong>Marca</strong></td><td>  {{ $factura->marca }}  </td>
                        </tr>
                        <tr>
                            <td><strong>Modelo</strong></td><td>  {{ $factura->modelo }}  </td>
                        </tr>
                        <tr>
                            <td><strong>Precio</strong></td><td>  {{ $factura->year}}  </td>
                        </tr>
                        <tr>
                            <td><strong>Precio</strong></td><td>  {{ $factura->precio}}  </td>
                        </tr>
                        <tr>
                            <td><strong>Numero de serie</strong></td><td>  {{ $factura->no_serie}}  </td>
                        </tr>
                        <tr>
                            <td><strong>Numero de Orden</strong></td><td>  {{ $factura->no_orden}}  </td>
                        </tr>


                        <tr>
                            <td><strong>Fecha </strong></td><td>{{ date('d-m-Y', strtotime($factura->created_at)) }}</td>
                        </tr>

                        <tr>
                            <td><strong>Descripción</strong></td><td>  {{ $factura->descripcion}}  </td>
                        </tr>

                        <tr>
                            <td><strong>Acciones</strong></td>
                            <td>    <a class="btn btn-warning" href="{{ route('factura.edit', $factura->id) }}">Editar</a>
                                <form style="display: inline" onsubmit="return confirm('Estás seguro que quieres eliminar?');" action="{{ route('factura.destroy', $factura->id) }}" method="POST" >
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>

    </section>

@endsection
