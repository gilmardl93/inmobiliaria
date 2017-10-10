@extends('layouts.admin.index')

@section('titulo') CATEGORIA @stop


@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">CATEGORIA</span>
                    <a href="{!! route('admin.categoria.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.categoria.update']) !!}
            @foreach($categoria as $row)
            <input type="hidden" name="id" value="{!! $row->id!!}">
            {!! Field::text('nombre', $row->nombre) !!}
            {!! Form::submit('ACTUALIZAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            @endforeach
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

