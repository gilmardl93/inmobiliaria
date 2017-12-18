        <nav class="navbar navbar-default ">
            <div class="container">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{!! route('page.home.index') !!}"><img src="{!! asset('page/assets/img/logo.png') !!}" width="130" height="50" alt=""></a>
                </div>

                
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('{!! route('page.home.login') !!}')" data-wow-delay="0.45s">Login</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('{!! route('page.home.propietarios') !!}')" data-wow-delay="0.48s">PROPIETARIOS</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown {!! $indexActivo ?? '' !!}" data-wow-delay="0.3s"><a class="" href="{!! route('page.home.index') !!}">INICIO</a></li>
                        <li class="wow fadeInDown {!! $noticiaActivo ?? '' !!}" data-wow-delay="0.3s"><a class="" href="{!! route('page.home.noticias') !!}">NOTICIAS</a></li>
                        <li class="dropdown yamm-fw {!! $categoriaActivo ?? '' !!}" data-wow-delay="0.4s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">CATEGORIAS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5>CASAS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.casas.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.casas.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                                <h5>DEPARTAMENTOS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.departamentos.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.departamentos.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>OFICINAS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.oficinas.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.oficinas.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                                <h5>LOCALES</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.locales.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.locales.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>PLAYAS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.playas.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.playas.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                                <h5>TERRENOS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.terrenos.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.terrenos.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>PROYECTOS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.proyectos.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.proyectos.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                                <h5>PROPIETARIOS</h5>
                                                <ul>
                                                    <li>
                                                        <a href="{!! route('page.propietarios.alquiler') !!}">ALQUILER</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! route('page.propietarios.venta') !!}">VENTA </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>

                        <li class="wow fadeInDown {!! $contactoActivo ?? '' !!}" data-wow-delay="0.5s"><a href="{!! route('page.home.contactos') !!}">CONTACTOS</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>