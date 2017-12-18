@extends('layouts.page.index')

@section('content')
	@foreach($noticia as $row)
		<div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
		    <div class="container">
		        <div class="row">
		            <div class="blog-lst col-md-12 pl0">
		                <section id="id-100" class="post single">

		                    <div class="post-header single">
		                        <div class="">
		                            <h2 class="wow fadeInLeft animated">{!! $row->titulo !!}</h2>
		                            <div class="title-line wow fadeInRight animated"></div>
		                        </div>
		                        <div class="row wow fadeInRight animated">
		                            <div class="col-sm-6 left" >
		                                <p class="date-comments">
		                                    <a href="single.html"><i class="fa fa-calendar-o"></i> {!! $row->fecha !!}</a>
		                                </p>
		                            </div>
		                        </div>
		                        <div class="image wow fadeInRight animated"> 
		                            <img src="{!! url('storage/'. $row->imagen) !!}" class="img-responsive" alt="Example blog post alt">
		                        </div>
		                    </div> 

		                    <div id="post-content" class="post-body single wow fadeInLeft animated">
		                        <p>
		                            {!! $row->descripcion !!}
		                        <p>
		                            <img src="assets/img/blog10.jpg" class="img-responsive" alt="Example blog post alt">
		                        </p>

		                       
		                    </div>    

		                </section> 
		            </div>
		        </div>
		    </div>
		</div>
	@endforeach
@stop