@extends('adminlte::layouts.app')


@section('contentheader_title')
    Facturas
@endsection

@section('main-content')

    <a href="{{route('factura.create')}}" class="btn btn-default btn-sm">Crear</a>

    <div class="box">
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="col-sm-12">
                    <table id="factura-table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info" width="100%">
                        <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($facturas as $factura)
                            <tr>
                                <td>
                                    <a href="{{ route('factura.show', $factura->id) }}">{{ $factura->marca}} </a>
                                </td>
                                <td>{{ $factura->modelo}}</td>
                                <td>{{ $factura->year}}</td>
                                <td>{{ date ('d-m-Y',  strtotime($factura->created_at))}}</td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $.noConflict();
    jQuery(document).ready(function ($) {
        $('#factura-table').DataTable();
    })
</script>

