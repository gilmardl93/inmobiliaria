@extends('layouts.page.index')

@section('content')
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">OFICINAS EN VENTA</h1>               
                    </div>
                </div>
            </div>
        </div>

        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                     
                @include('page.partials.buscar')

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 

                        <div class="col-xs-12 layout-switcher" align="right">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                                @foreach($propiedades as $row)
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="{!! route('page.propiedades.detalle', $row->slug) !!}" ><img src="{!! url('storage/'.$row->imagen1) !!}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="{!! route('page.propiedades.detalle', $row->slug) !!}"> {!! $row->titulo !!} </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> {!! $row->area !!} </span>
                                            <span class="proerty-price pull-right">S/. {!! number_format($row->precio,2) !!}</span>
                                            <p style="display: none;">Ubigeo: {!! $row->ubigeo !!}</p>
                                            <div class="property-icon">
                                                <img src="{!! url('page/assets/img/icon/bed.png') !!}">({!! $row->ambientes !!})|
                                                <img src="{!! url('page/assets/img/icon/shawer.png') !!}">({!! $row->banos !!})|
                                                <img src="{!! url('page/assets/img/icon/cars.png') !!}">({!! $row->garaje !!})  
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                                @endforeach                                
                        </div>
                    </div>
                    
                </div>  
                </div>              
            </div>
        </div>
@stop