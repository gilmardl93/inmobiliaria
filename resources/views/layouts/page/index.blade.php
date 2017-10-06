<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PYM INMOBILIARIA</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="PYM INMOBILIARIA">
        <meta name="keyword" content="PYM INMOBILIARIA">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        {!! Html::style('page/assets/css/normalize.css') !!}
        {!! Html::style('page/assets/css/font-awesome.min.css') !!}
        {!! Html::style('page/assets/css/fontello.css') !!}
        {!! Html::style('page/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css') !!}
        {!! Html::style('page/assets/fonts/icon-7-stroke/css/helper.css') !!}
        {!! Html::style('page/assets/css/animate.css') !!}
        {!! Html::style('page/assets/css/bootstrap-select.min.css') !!}
        {!! Html::style('page/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('page/assets/css/icheck.min_all.css') !!}
        {!! Html::style('page/assets/css/price-range.css') !!}
        {!! Html::style('page/assets/css/owl.carousel.css') !!}
        {!! Html::style('page/assets/css/owl.theme.css') !!}
        {!! Html::style('page/assets/css/owl.transitions.css') !!}
        {!! Html::style('page/assets/css/style.css') !!}
        {!! Html::style('page/assets/css/style.css') !!}
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        @include('layouts.page.partials.header')     

        @include('layouts.page.partials.menu')

        @yield('content')
        
        @include('layouts.page.partials.footer')     

        {!! Html::script('page/assets/js/modernizr-2.6.2.min.js') !!}
        {!! Html::script('page/assets/js/jquery-1.10.2.min.js') !!}
        {!! Html::script('page/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('page/assets/js/bootstrap-select.min.js') !!}
        {!! Html::script('page/assets/js/bootstrap-hover-dropdown.js') !!}
        {!! Html::script('page/assets/js/easypiechart.min.js') !!}
        {!! Html::script('page/assets/js/jquery.easypiechart.min.js') !!}
        {!! Html::script('page/assets/js/owl.carousel.min.js') !!}
        {!! Html::script('page/assets/js/wow.js') !!}
        {!! Html::script('page/assets/js/icheck.min.js') !!}
        {!! Html::script('page/assets/js/price-range.js') !!}
        {!! Html::script('page/assets/js/main.js') !!}

    </body>
</html>