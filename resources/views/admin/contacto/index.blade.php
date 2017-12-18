@extends('layouts.admin.index')

@section('titulo') CONTACTOS @stop


@section('content')
<div class="row">
	@include('admin.alerts.alert')

    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">CONTACTOS</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.contactos.update']) !!}
			{!! Form::hidden('id', $contactos->id) !!}
            {!! Field::text('direccion', $contactos->direccion ) !!}
            {!! Field::email('email1', $contactos->email1) !!}
            {!! Field::email('email2', $contactos->email2) !!}
            {!! Field::text('telefono1', $contactos->telefono1) !!}
            {!! Field::text('telefono2', $contactos->telefono2) !!}
            {!! Form::submit('ACTUALIZAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

