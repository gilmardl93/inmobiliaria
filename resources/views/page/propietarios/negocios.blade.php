@extends('layouts.page.index')

@section('css-style')
{!! Html::style('page/assets/css/wizard.css') !!}
@stop

@section('content')
	
		<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Tienes propiedad para vender o alquilar? ... Y no tienes tiempo ...</h1>               
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area submit-property" style="background-color: #FCFCFC;">
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            {!! Form::open(['method' => 'POST', 'route' => 'page.negocios.store', 'files' => true]) !!}           
                                <div class="wizard-header">
                                    <h3>
                                        <b>NOSOTROS</b> LO VENDEMOS O LO ALQUILAMOS POR TI  <br>
                                        <small></small>
                                    </h3>
                                </div>

                                <ul>
                                    <li><a href="#step1" data-toggle="tab"></a></li>
                                </ul>

                                <div class="tab-content">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {!! session('success') !!}
                                    </div>
                                    @endif 

                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> Por favor complete el siguiente formulario y nos pondremos en contacto con usted.</h4>
                                            <div class="col-sm-6">
                                            	{!! Field::text('datos', ['label' => 'Nombres y Apellidos']) !!}

                                                {!! Field::text('celular') !!}

                                                {!! Field::email('email') !!}

                                                {!! Field::textarea('descripcion', ['label' => 'Describe tu propiedad']) !!}
                                            </div>
                                            <div class="col-sm-6">
                                            	<label>TIPO</label>
                                                {!! Form::select('tipo',  ['VENTA' => 'VENTA', 'ALQUILER' => 'ALQUILER'], null, ['class' => 'form-control']) !!}
                                                <hr>
                                            	<label>Adjunte documento (PDF)</label>
                                            	{!! Field::file('archivo') !!}
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='submit' class='btn btn-finish btn-primary ' name='finish' value='ENVIAR' />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>	
                            {!! Form::close() !!}
                        </div>
                        <!-- End submit form -->
                    </div> 
                </div>
            </div>
        </div>
@stop

@section('js-script')
{!! Html::script('page/assets/js/wizard.js') !!}
{!! Html::script('page/assets/js/jquery.bootstrap.wizard.js')!!}
@stop