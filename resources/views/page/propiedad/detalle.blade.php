@extends('layouts.page.index')

@section('css-style')
{!! Html::style('page/assets/css/lightslider.min.css') !!}
@stop

@section('content')
    <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >
                    @foreach($propiedad as $row)

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div> 

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        @if($row->imagen1 != 'noimagen.jpg')
                                        <li data-thumb="{!! url('storage/'.$row->imagen1) !!}"> 
                                            <img src="{!! url('storage/'.$row->imagen1) !!}" />
                                        </li>
                                        @endif
                                        @if($row->imagen2 != 'noimagen.jpg')
                                        <li data-thumb="{!! url('storage/'.$row->imagen2) !!}"> 
                                            <img src="{!! url('storage/'.$row->imagen2) !!}" />
                                        </li>
                                        @endif
                                        @if($row->imagen3 != 'noimagen.jpg')
                                        <li data-thumb="{!! url('storage/'.$row->imagen3) !!}"> 
                                            <img src="{!! url('storage/'.$row->imagen3) !!}" />
                                        </li>
                                        @endif
                                        @if($row->imagen4 != 'noimagen.jpg')
                                        <li data-thumb="{!! url('storage/'.$row->imagen4) !!}"> 
                                            <img src="{!! url('storage/'.$row->imagen4) !!}" />
                                        </li>  
                                        @endif                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left">{!! $row->titulo !!}</h1>
                                <span class="property-price pull-right">S/. {!! number_format($row->precio,2) !!}</span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">                                        
                                        <img src="{!! url('page/assets/img/icon/sale-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Estado</span>
                                        <span class="property-info-value">{!! $row->estado !!}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <img src="{!! url('page/assets/img/icon/room-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Area</span>
                                        <span class="property-info-value">{!! $row->area !!} <b class="property-info-unit">m2</b></span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="{!! url('page/assets/img/icon/bed-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Ambientes</span>
                                        <span class="property-info-value">{!! $row->ambientes !!}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="{!! url('page/assets/img/icon/cars-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Estacionamiento</span>
                                        <span class="property-info-value">{!! $row->garaje !!}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <img src="{!! url('page/assets/img/icon/os-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Baños</span>
                                        <span class="property-info-value">{!! $row->banos !!}</span>
                                    </span>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <img src="{!! url('page/assets/img/icon/room-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garages</span>
                                        <span class="property-info-value">2</span>
                                    </span>
                                </div>
                                
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <img src="{!! url('page/assets/img/icon/shawer-orange.png') !!}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garages</span>
                                        <span class="property-info-value">2</span>
                                    </span>
                                </div>


                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Descripción</h4>
                                <div class="s-property-content">
                                    {!! $row->descripcion !!}
                                </div>
                            </div>

                            <div class="section">
                                <h4 class="s-property-title">Detalle Adicional</h4>
                                <div class="s-property-content">
                                    <div class="row">
                                        @if($row->jardin == 1)
                                        <div class="col-md-4">
                                            JARDIN = SI
                                        </div>
                                        @endif
                                        @if($row->patio == 1)
                                        <div class="col-md-4">
                                            PATIO = SI
                                        </div>
                                        @endif
                                        @if($row->tv_cable == 1)
                                        <div class="col-md-4">
                                            TV - CABLE = SI
                                        </div>
                                        @endif
                                        @if($row->bano_dormitorio == 1)
                                        <div class="col-md-4">
                                            BAÑO EN DORMITORIO = SI
                                        </div>
                                        @endif
                                        @if($row->biblioteca == 1)
                                        <div class="col-md-4">
                                            BIBLIOTECA = SI
                                        </div>
                                        @endif
                                        @if($row->lavanderia == 1)
                                        <div class="col-md-4">
                                            LAVANDERIA = SI
                                        </div>
                                        @endif
                                        @if($row->linea_telefonica == 1)
                                        <div class="col-md-4">
                                            LAVANDERIA = SI
                                        </div>
                                        @endif
                                        @if($row->sala == 1)
                                        <div class="col-md-4">
                                            SALA = SI
                                        </div>
                                        @endif
                                        @if($row->amoblado == 1)
                                        <div class="col-md-4">
                                            AMOBLADO = SI
                                        </div>
                                        @endif
                                    </div> 
                                </div>
                            </div>
                            <!-- End description area  -->

                        </div>
                    </div>
                    @endforeach

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">

                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Deseo mas información</h3>
                                </div>
                                <div class="panel-body search-widget">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {!! session('success') !!}
                                    </div>
                                    @endif 
                                    {!! Form::open(['method' => 'POST', 'route' => 'page.propiedades.store', 'class' => 'form-inline']) !!}
                                    {!! Form::hidden('idpropiedad', $row->id) !!}
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    {!! Field::text('datos', null, ['label' => 'Apellidos y Nombres','class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    {!! Field::email('email', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    {!! Field::text('celular', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">                                                    
                                                    {!! Field::text('asunto', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    {!! Field::textarea('mensaje', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12">  
                                                    {!! Field::submit('ENVIAR', ['class' => 'button btn largesearch-btn']) !!}
                                                </div>  
                                            </div>
                                        </fieldset>                                     
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>

            </div>
        </div>
@stop

@section('js-script')
{!! Html::script('page/assets/js/lightslider.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
    </script>
@stop