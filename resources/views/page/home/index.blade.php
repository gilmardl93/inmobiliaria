@extends('layouts.page.index')

@section('content')

@include('page.home.partials.banner')
		<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>PROPIEDADES DESTACADAS</h2>
                        <BR>
                    </div>
                </div>

                <div class="row">   
                    <div class="proerty-th">
                        @foreach($propiedades as $propiedad)
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="{!! route('page.propiedades.detalle', $propiedad->slug) !!}" ><img src="{!! url('storage/'.$propiedad->imagen1) !!}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="{!! route('page.propiedades.detalle', $propiedad->slug) !!}" >{!! $propiedad->titulo !!}</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> {!! $propiedad->area !!} </span>
                                    <span class="proerty-price pull-right">S/. {!! number_format($propiedad->precio,2) !!}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Count area -->
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Puedes confiar en nosotros </h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-users"></span>
                                    </div>
                                    <div class="chart" data-percent="1200">
                                        <h2 class="percent" id="counter">0</h2>
                                        <h5>CLIENTES FELICES </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="{!! $propiedades->count() !!}">
                                        <h2 class="percent" id="counter">{!! $propiedades->count() !!}</h2>
                                        <h5>PROPIEDADES EN STOCK</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-4 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-flag"></span>
                                    </div>
                                    <div class="chart" data-percent="{!! $ubigeos->count() !!}">
                                        <h2 class="percent" id="counter">{!! $ubigeos->count() !!}</h2>
                                        <h5>CIUDADES REGISTRADAS </h5>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Count area -->
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>SUSCRIBETE </h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {!! session('success') !!}
                            </div>
                            @endif
                        {!! Form::open(['method' => 'POST', 'route' => 'page.suscripcion.store']) !!}
                        <div class="row">
                            <div class="col-md-4">
                                {!! Field::text('datos', ['label' => 'Nombres y Apellidos']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Field::email('email') !!}
                            </div>
                            <div class="col-md-2">
                                {!! Field::text('celular') !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::submit('SUSCRIBIRSE', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

@stop