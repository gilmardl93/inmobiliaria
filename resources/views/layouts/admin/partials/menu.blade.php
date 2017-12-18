            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start {!! $ListarHome ?? '' !!} {!! $ListarUsuarios ?? '' !!} {!! $ListarCategoria ?? '' !!} {!! $ListarNoticias ?? '' !!} {!! $ListarSuscripcion ?? '' !!} {!! $ListarContactos ?? '' !!} {!! $ListarBanner ?? '' !!} {!! $listarSocial ?? '' !!}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">CONFIGURACION</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start {!! $ListarUsuarios ?? '' !!}">
                                    <a href="{!! route('admin.users.index') !!}" class="nav-link ">
                                        <i class="fa fa-users"></i>
                                        <span class="title">USUARIOS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $ListarNoticias ?? '' !!}">
                                    <a href="{!! route('admin.noticias.index') !!}" class="nav-link ">
                                        <i class="icon-note"></i>
                                        <span class="title">NOTICIAS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $ListarSuscripcion ?? '' !!}">
                                    <a href="{!! route('admin.suscripcion.index') !!}" class="nav-link ">
                                        <i class="icon-envelope-letter"></i>
                                        <span class="title">SUSCRIPCION</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $ListarContactos ?? '' !!}">
                                    <a href="{!! route('admin.contactos.edit') !!}" class="nav-link ">
                                        <i class="fa fa-contao"></i>
                                        <span class="title">CONTACTOS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $ListarBanner ?? '' !!}">
                                    <a href="{!! route('admin.banner.index') !!}" class="nav-link ">
                                        <i class="fa fa-contao"></i>
                                        <span class="title">BANNER</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarSocial ?? '' !!}">
                                    <a href="{!! route('admin.social.edit') !!}" class="nav-link ">
                                        <i class="icon-note"></i>
                                        <span class="title">REDES SOCIALES</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start {!! $listarCasas ?? '' !!} {!! $listarDepartamentos ?? '' !!} {!! $listarLocales ?? '' !!} {!! $listarPlayas ?? '' !!} {!! $listarOficinas ?? '' !!} {!! $listarTerrenos ?? '' !!} {!! $listarProyectos ?? '' !!} {!! $listarPropietarios ?? '' !!}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">PROPIEDADES</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start {!! $listarCasas ?? '' !!}">
                                    <a href="{!! route('admin.casas.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">CASAS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarDepartamentos ?? '' !!}">
                                    <a href="{!! route('admin.departamentos.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">DEPARTAMENTOS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarLocales ?? '' !!}">
                                    <a href="{!! route('admin.locales.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">LOCALES</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarPlayas ?? '' !!}">
                                    <a href="{!! route('admin.playas.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">PLAYAS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarOficinas ?? '' !!}">
                                    <a href="{!! route('admin.oficinas.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">OFICINAS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarTerrenos ?? '' !!}">
                                    <a href="{!! route('admin.terrenos.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">TERRENOS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarProyectos ?? '' !!}">
                                    <a href="{!! route('admin.proyectos.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">PROYECTOS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarPropietarios ?? '' !!}">
                                    <a href="{!! route('admin.propietarios.index') !!}" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">PROPIETARIOS</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start {!! $listarMensajesContactos ?? '' !!} {!! $listarMensajesPropiedades ?? '' !!} {!! $listarNegocioPropietarios ?? '' !!}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">MENSAJES</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start {!! $listarMensajesContactos ?? '' !!} ">
                                    <a href="{!! route('admin.mensajes-contactos.index') !!}" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">CONTACTOS</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarMensajesPropiedades ?? '' !!}">
                                    <a href="{!! route('admin.mensajes-propiedades.index') !!}" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">PROPIEDADES</span>
                                    </a>
                                </li>
                                <li class="nav-item start {!! $listarNegocioPropietarios ?? '' !!}">
                                    <a href="{!! route('admin.negocio-propietarios.index') !!}" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">NEGOCIOS</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>