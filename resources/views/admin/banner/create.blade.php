@extends('layouts.admin.index')

@section('titulo') BANNER @stop


@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">BANNER</span>
                    <a href="{!! route('admin.banner.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.banner.store', 'files' => true]) !!}
            {!! Field::file('imagen') !!}
            {!! Form::submit('REGISTRAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

