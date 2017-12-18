@extends('layouts.admin.index')

@section('titulo') BIENVENIDO @stop

@section('content')
				<div class="page-fixed-main-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row widget-row">
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">TOTAL DE PROPIEDADES</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-home"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">{!! $propiedades->count() !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">TOTAL MSJ DE CONTACTOS</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-tag"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">{!! $MensajeContactos->count() !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">TOTAL MSJ DE PROPIEDADES</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-tag"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">{!! $MensajePropiedades->count() !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">TOTAL MSJ DE NEGOCIOS</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-tag"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">{!! $NegocioPropietarios->count() !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop