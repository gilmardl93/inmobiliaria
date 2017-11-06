@extends('layouts.admin.index')

@section('titulo') NOTICIAS @stop

@section('css-style')
{!! Html::style('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
{!! Html::style('admin/assets/global/plugins/bootstrap-summernote/summernote.css') !!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">NOTICIAS </span>
                    <a href="{!! route('admin.noticias.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.noticias.store', 'files' => true]) !!}
            <div class="row">
                <div class="col-md-8">
                    {!! Field::text('titulo') !!}
                </div>
                <div class="col-md-3">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Seleccionar Imagen </span>
                                    <span class="fileinput-exists"> Cambiar </span>
                                    <input type="file" name="imagen"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                            </div>
                    </div>
                </div>
            </div>
            {!! Field::textarea('descripcion',['class' => 'summernote', 'id' => 'summernote_1']) !!}
            {!! Form::submit('REGISTRAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop


@section('js-script')
{!! Html::script('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
{!! Html::script('admin/assets/global/plugins/bootstrap-summernote/summernote.min.js') !!}
{!! Html::script('admin/assets/pages/scripts/components-editors.min.js') !!}
@stop