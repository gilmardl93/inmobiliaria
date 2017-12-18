@extends('layouts.admin.index')

@section('titulo') PROPIETARIOS @stop

@section('css-style')
{!! Html::style('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
{!! Html::style('admin/assets/global/plugins/bootstrap-summernote/summernote.css') !!}
{!! Html::style('admin/assets/global/plugins/typeahead/typeahead.css') !!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">PROPIETARIOS</span>
                    <a href="{!! route('admin.propietarios.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.propietarios.store', 'files' => true]) !!}
            <div class="row">
                <div class="col-md-6">
                    <label>Tipo</label>
                    {!! Form::select('estado', ['VENTA' => 'VENTA', 'ALQUILER' => 'ALQUILER'], null, ['class' => 'form-control']) !!}
                </div> 
                <div class="col-md-6">
                    {!! Field::text('precio') !!}
                </div>
                <div class="col-md-12">
                    {!! Field::text('titulo') !!}
                </div>
                <div class="col-md-12">
                    {!! Field::textarea('descripcion',['class' => 'summernote', 'id' => 'summernote_1']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Seleccionar Imagen </span>
                                    <span class="fileinput-exists"> Cambiar </span>
                                    <input type="file" name="imagen1"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                            </div>
                    </div>
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
                                    <input type="file" name="imagen2"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                            </div>
                    </div>
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
                                    <input type="file" name="imagen3"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                            </div>
                    </div>
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
                                    <input type="file" name="imagen4"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                            </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-2">
                    {!! Field::text('area') !!}
                </div>
                <div class="col-md-2">
                    {!! Field::text('zonificacion') !!}
                </div>
                <div class="col-md-8">
                    {!! Field::text('ubigeo', null, ['id' => 'typeahead_example_1', 'label' => 'Ubigeo (CHORRILLOS-LIMA-LIMA)']) !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    {!! Field::text('vista') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('dormitorios') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('bano_completo', ['label' => 'Baño completo']) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('medio_bano', ['label' => 'Medio baño']) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('frente') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('fondo') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('area_construida') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('area_terreno') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('banos',null,['label' => 'Baños']) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('antiguedad') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('garaje') !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('ambientes') !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::checkbox('jardin') !!}
                    <label>Jardin</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('patio') !!}
                    <label>Patio</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('tv_cable') !!}
                    <label>TV Cable</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('comedor') !!}
                    <label>Comedor</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('bano_dormitorio') !!}
                    <label>Baño en dormitorio</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('biblioteca') !!}
                    <label>Biblioteca</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('lavanderia') !!}
                    <label>Lavanderia</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('linea_telefonica') !!}
                    <label>Linea Telefonica</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('sala') !!}
                    <label>Sala</label>
                </div>
                <div class="col-md-3">
                    {!! Form::checkbox('amoblado') !!}
                    <label>Amoblado</label>
                </div>
            </div>
            
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
{!! Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}
{!! Html::script('admin/assets/global/plugins/typeahead/handlebars.min.js') !!}
{!! Html::script('admin/assets/global/plugins/typeahead/typeahead.bundle.min.js') !!}
{!! Html::script('admin/assets/apps/scripts/ubigeo.js') !!}
@stop