@extends('layouts.admin.index')

@section('titulo') USUARIOS @stop


@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">USUARIOS</span>
                    <a href="{!! route('admin.users.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.users.store']) !!}
            {!! Field::text('username') !!}
            {!! Field::password('password') !!}
            {!! Field::text('nombres') !!}
            {!! Field::text('paterno') !!}
            {!! Field::text('materno') !!}
            {!! Form::submit('REGISTRAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

