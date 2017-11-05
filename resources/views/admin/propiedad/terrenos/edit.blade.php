@extends('layouts.admin.index')

@section('titulo') TERRENOS @stop

@section('css-style')
{!! Html::style('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
{!! Html::style('admin/assets/global/plugins/select2/css/select2.min.css') !!}
{!! Html::style('admin/assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}
{!! Html::style('admin/assets/global/plugins/bootstrap-summernote/summernote.css') !!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">TERRENOS</span>
                    <a href="{!! route('admin.terrenos.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
            {!! Form::open(['method' => 'POST', 'route' => 'admin.terrenos.update', 'files' => true]) !!}
            @foreach($propiedad as $row)
            {!! Form::hidden('id', $row->id) !!}
            {!! Form::hidden('img1',$row->imagen1) !!}
            {!! Form::hidden('img2',$row->imagen2) !!}
            {!! Form::hidden('img3',$row->imagen3) !!}
            {!! Form::hidden('img4',$row->imagen4) !!}
            <div class="row">
                <div class="col-md-12">
                    <label>Tipo</label>
                    {!! Form::select('estado', ['VENTA' => 'VENTA', 'ALQUILER' => 'ALQUILER'], $row->estado, ['class' => 'form-control']) !!}
                </div> 
                <div class="col-md-12">
                    {!! Field::text('titulo', $row->titulo) !!}
                </div>
                <div class="col-md-12">
                    {!! Field::textarea('descripcion', $row->descripcion , ['class' => 'summernote', 'id' => 'summernote_1']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="{!! url('storage/'.$row->imagen1) !!}"></div>
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
                            <img src="{!! url('storage/'.$row->imagen2) !!}"> </div>
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
                            <img src="{!! url('storage/'.$row->imagen3) !!}"> </div>
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
                            <img src="{!! url('storage/'.$row->imagen4) !!}"> </div>
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
                    {!! Field::text('area', $row->area) !!}
                </div>
                <div class="col-md-2">
                    {!! Field::text('zonificacion', $row->zonificacion) !!}
                </div>
                <div class="col-md-8">
                    <label>Ubigeo</label>
                    {!! Form::select('idubigeo',[],null , ['id' => 'Ubigeo','class'=>'form-control']);!!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    {!! Field::text('frente', $row->frente) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('fondo', $row->fondo) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('area_construida', $row->area_construida) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('area_terreno', $row->area_terreno) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('banos', $row->banos, ['label' => 'Baños']) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('antiguedad', $row->antiguedad) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('garaje', $row->garaje) !!}
                </div>
                <div class="col-md-3">
                    {!! Field::text('ambientes', $row->ambientes) !!}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    @if($row->jardin == 1)
                    {!! Form::checkbox('jardin', $row->jardin, true  ) !!}
                    @else
                    {!! Form::checkbox('jardin' ) !!}
                    @endif
                    <label>Jardin</label>
                </div>
                <div class="col-md-3">
                    @if($row->patio == 1)
                    {!! Form::checkbox('patio', $row->patio, true  ) !!}
                    @else
                    {!! Form::checkbox('patio' ) !!}
                    @endif
                    <label>Patio</label>
                </div>
                <div class="col-md-3">
                    @if($row->tv_cable == 1)
                    {!! Form::checkbox('tv_cable', $row->tv_cable, true  ) !!}
                    @else
                    {!! Form::checkbox('tv_cable' ) !!}
                    @endif
                    <label>TV Cable</label>
                </div>
                <div class="col-md-3">
                    @if($row->comedor == 1)
                    {!! Form::checkbox('comedor', $row->comedor, true  ) !!}
                    @else
                    {!! Form::checkbox('comedor' ) !!}
                    @endif
                    <label>Comedor</label>
                </div>
                <div class="col-md-3">
                    @if($row->bano_dormitorio == 1)
                    {!! Form::checkbox('bano_dormitorio', $row->bano_dormitorio, true  ) !!}
                    @else
                    {!! Form::checkbox('bano_dormitorio' ) !!}
                    @endif
                    <label>Baño en dormitorio</label>
                </div>
                <div class="col-md-3">
                    @if($row->biblioteca == 1)
                    {!! Form::checkbox('biblioteca', $row->biblioteca, true  ) !!}
                    @else
                    {!! Form::checkbox('biblioteca' ) !!}
                    @endif
                    <label>Biblioteca</label>
                </div>
                <div class="col-md-3">
                    @if($row->lavanderia == 1)
                    {!! Form::checkbox('lavanderia', $row->lavanderia, true  ) !!}
                    @else
                    {!! Form::checkbox('lavanderia' ) !!}
                    @endif
                    <label>Lavanderia</label>
                </div>
                <div class="col-md-3">
                    @if($row->linea_telefonica == 1)
                    {!! Form::checkbox('linea_telefonica', $row->linea_telefonica, true  ) !!}
                    @else
                    {!! Form::checkbox('linea_telefonica' ) !!}
                    @endif
                    <label>Linea Telefonica</label>
                </div>
                <div class="col-md-3">
                    @if($row->sala == 1)
                    {!! Form::checkbox('sala', $row->sala, true  ) !!}
                    @else
                    {!! Form::checkbox('sala' ) !!}
                    @endif
                    <label>Sala</label>
                </div>
                <div class="col-md-3">
                    @if($row->amoblado == 1)
                    {!! Form::checkbox('amoblado', $row->amoblado, true  ) !!}
                    @else
                    {!! Form::checkbox('amoblado' ) !!}
                    @endif
                    <label>Amoblado</label>
                </div>
            </div>
            @endforeach
            {!! Form::submit('ACTUALIZAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop

@section('js-script')
{!! Html::script('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
{!! Html::script('admin/assets/global/plugins/select2/js/select2.full.min.js') !!}
{!! Html::script('admin/assets/global/plugins/select2/js/i18n/es.js') !!}
{!! Html::script('admin/assets/global/plugins/bootstrap-summernote/summernote.min.js') !!}
{!! Html::script('admin/assets/pages/scripts/components-editors.min.js') !!}
<script type="text/javascript">
    $(document).ready(function() {
        $("#Ubigeo").select2({
            width:'auto',
            ajax: {
                url: '{{ url("ubigeo-json") }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        varsearch: params.term // search term
                    };
                },
                processResults: function(data) {
                    // parse the results into the format expected by Select2.
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data
                    return {
                        results: data
                    };
                },
                cache: true
            },
            placeholder : 'Seleccione el distrito del participante: ejemplo LIMA',
            minimumInputLength: 3,
            templateResult: format,
            templateSelection: format,
            escapeMarkup: function(markup) {
                return markup;
            } // let our custom formatter work
        });

        function format(res){
            var markup=res.text;
            return markup;
        }
    });
</script>
@stop