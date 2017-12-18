                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-envelope-open"></i>
                                    <span class="badge badge-danger"> {!! $MensajeContactos->count() !!} </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        @if($MensajeContactos->count() == 1)
                                        <h3>Tiene <span class="bold">{!! $MensajeContactos->count() !!}</span> Mensaje</h3>
                                        @else
                                        <h3>Tiene <span class="bold">{!! $MensajeContactos->count() !!}</span> Mensajes</h3>
                                        @endif
                                        <a href="{!! url('mensajes-contactos') !!}">Ver Todo</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            @foreach($MensajeContactos as $MensajeContacto)
                                            <li>
                                                <a href="#">
                                                    <span class="subject">
                                                        <span class="from"> {!! $MensajeContacto->datos !!} </span>
                                                        <span class="time"> {!! $MensajeContacto->fecha_enviado !!} </span>
                                                    </span>
                                                    <span class="message"> {!! $MensajeContacto->asunto !!} </span>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>