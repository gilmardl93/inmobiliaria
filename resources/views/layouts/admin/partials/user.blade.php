                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> {!! Auth::user()->Datos !!} </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="../assets/layouts/layout4/img/avatar9.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{!! url('usuarios') !!}">
                                        <i class="icon-user"></i> Mi perfil </a>
                                    </li>
                                    <li>
                                        <a href="{!! route('auth.logout') !!}">
                                        <i class="icon-exit"></i> Cerrar Sesion </a>
                                    </li>
                                </ul>
                            </li>