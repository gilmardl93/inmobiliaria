@extends('layouts.admin.index')

@section('titulo') CASAS @stop

@section('css-style')
{!! Html::style('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
{!! Html::style('admin/assets/global/plugins/select2/css/select2.min.css') !!}
{!! Html::style('admin/assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
   		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">CASAS</span>
                    <a href="{!! route('admin.casas.index') !!}" class="btn red btn-outline sbold uppercase">ATRAS</a>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.casas.store']) !!}
            <div class="row">
                <div class="col-md-12">
                    {!! Field::text('nombre') !!}
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
                <div class="col-md-12">
                    <label>Ubigeo</label>
                    {!!Form::select('idubigeo',[] ,null , ['id'=>'Ubigeo','class'=>'form-control']);!!}
                </div>
            </div>
            <br>
            
            
            {!! Form::submit('REGISTRAR', ['class' => 'btn blue btn-outline sbold uppercase']) !!}
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

@section('js-script')
{!! Html::script('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
{!! Html::script('admin/assets/global/plugins/select2/js/select2.full.min.js') !!}
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
            placeholder : 'Seleccione el ubigeo: ejemplo LIMA',
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