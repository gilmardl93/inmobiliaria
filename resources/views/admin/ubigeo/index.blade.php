@extends('layouts.admin.index')

@section('titulo') UBIGEO @stop

@section('css-style')
{!! Html::style('admin/assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
@stop

@section('content')
@include('admin.alerts.alert')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">UBIGEO</span>
                    <a href="{!! route('admin.ubigeo.create') !!}" class="btn dark btn-outline sbold uppercase">NUEVO</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			<table class="table table-bordered table-hover Ubigeo">
			    <thead>
			        <tr>
			            <th> CODIGO </th>
                        <th> NOMBRE </th>
			            <th> DESCRIPCION </th>
			            <th> ACCION </th>
			        </tr>
			    </thead>
			    <tbody>

			    </tbody>
			</table>
			</div>
		</div>
	</div>
</div>
@stop

@section('js-script')
{!! Html::script('admin/assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('admin/assets/global/scripts/datatable.js') !!}
{!! Html::script('admin/assets/global/plugins/datatables/datatables.min.js') !!}
{!! Html::script('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
<script>
$('.Ubigeo').dataTable({
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "search": "Buscar Postulante :",
        "lengthMenu": "_MENU_ registros"
    },
    dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
    buttons: [
                { extend: 'excel', className: 'btn yellow btn-outline ' },
                { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns'}
            ],
    "bProcessing": true,
    "sAjaxSource": '{{ url('ubigeo-data') }}',
    "pagingType": "bootstrap_full_number",
    "columnDefs": [
                {  // set default column settings
                    'orderable': false,
                    'targets': '_all'
                },
                {
                    'targets':3,
                    'render': function ( data, type, row ) {
                      return ' \
                      <a href="ubigeo-editar/'+row.id+'" title="Editar"class="btn btn-icon-only green-haze" ><i class="fa fa-edit"></i></a> \
                      <a href="ubigeo-eliminar/'+row.id+' " title="Eliminar"class="btn btn-icon-only red" ><i class="fa fa-trash"></i></a> \
                      ';
                    }
                },
            ],
    "columns": [
            { "data": "codigo","defaultContent": "" },
            { "data": "nombre","defaultContent": "" },
            { "data": "descripcion","defaultContent": "" },
        ],
});
</script>
@stop