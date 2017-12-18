@extends('layouts.page.index')

@section('content')
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Contactos</h1>               
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"> 
                        <div class="" id="contact1">                        
                            <div class="row">
                                @foreach($contactos as $contacto)
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Direccion</h3>
                                    <p>{!! $contacto->direccion !!}</p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Telefonos</h3>
                                    <p>{!! $contacto->telefono1 !!}</p>
                                    <p>{!! $contacto->telefono2 !!}</p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i> E-mail</h3>
                                    <p>{!! $contacto->email1 !!}</p>
                                    <p>{!! $contacto->email2 !!}</p>
                                </div>
                                @endforeach
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            
                            <hr>
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {!! session('success') !!}
                            </div>
                            @endif    
                            <h2>Formulario de Contacto</h2>
                            {!! Form::open(['method' => 'POST', 'route' => 'page.contactos.store']) !!}
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Field::text('datos', ['label' => 'Apellidos y Nombres']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Field::text('celular') !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Field::email('email') !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Field::text('asunto') !!}
                                    </div>
                                    <div class="col-sm-12">
                                        {!! Field::textarea('mensaje') !!}
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ENVIAR</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            {!! Form::close() !!}
                        </div>
                    </div>    
                </div>
               
            </div>
        </div>
@stop