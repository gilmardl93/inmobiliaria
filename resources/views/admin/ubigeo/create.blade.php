@extends('layouts.admin.index')

@section('titulo') UBIGEO @stop


@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">UBIGEO</span>
                    <a href="{!! route('admin.ubigeo.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.ubigeo.store']) !!}
            {!! Field::text('codigo') !!}
            {!! Field::text('nombre') !!}
            {!! Field::text('descripcion') !!}
            {!! Form::submit('REGISTRAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

