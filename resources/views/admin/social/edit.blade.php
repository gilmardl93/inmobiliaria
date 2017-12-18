@extends('layouts.admin.index')

@section('titulo') REDES SOCIALES @stop


@section('content')
@include('admin.alerts.alert')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">REDES SOCIALES</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.social.update']) !!}
			{!! Form::hidden('id', $social->id) !!}
            {!! Field::text('facebook', $social->facebook) !!}
            {!! Field::text('twitter', $social->twitter) !!}
            {!! Form::submit('ACTUALIZAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop