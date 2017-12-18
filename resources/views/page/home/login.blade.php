@extends('layouts.page.index')

@section('content')
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">INICIAR SESION </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 
        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">


                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>INICIAR SESION </h2> 
                            {!! Form::open(['method' => 'POST', 'route' => 'auth.login']) !!}
                            	{!! Field::text('username') !!}
                            	{!! Field::password('password') !!}
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> INGRESAR</button>
                                </div>
                            {!! Form::close() !!}
                            <br>
                            
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
@stop