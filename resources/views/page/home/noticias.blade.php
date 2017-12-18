@extends('layouts.page.index')

@section('content')
    <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Noticias</h1>               
                    </div>
                </div>
            </div>
        </div>
	<div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">   
                <div class="row">
                	@foreach($noticias as $noticia)
                    <div class="blog-lst col-md-12 pl0">
                        <section class="post">
                            <div class="text-center padding-b-50">
                                <h2 class="wow fadeInLeft animated">{!! $noticia->titulo !!}</h2>
                                <div class="title-line wow fadeInRight animated"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 left" >
                                    <p class="date-comments">
                                        <a href="single.html"><i class="fa fa-calendar-o"></i> {!! $noticia->fecha !!}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="image wow fadeInLeft animated">
                                <a href="single.html">
                                    <img src="{!! url('storage/'.$noticia->imagen) !!}" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>
                            <p class="intro">{!! substr($noticia->descripcion,0,150) !!} ...</p>
                            <p class="read-more">
                                <a href="{!! url('ver-noticia/'.$noticia->slug) !!}" class="btn btn-default btn-border">Continuar leyendo</a>
                            </p>
                        </section>   
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

@stop