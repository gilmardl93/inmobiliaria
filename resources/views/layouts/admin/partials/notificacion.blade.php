                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-success"> {!! $MensajePropiedades->count() !!} </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            @if($MensajePropiedades->count() == 1)
                                            <span class="bold">Tiene {!! $MensajePropiedades->count() !!}</span> notificacion
                                            @else 
                                            <span class="bold">Tiene {!! $MensajePropiedades->count() !!}</span> notificaciones
                                            @endif
                                        </h3>
                                        <a href="{!! url('mensajes-propiedades') !!}">Ver Todo</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            @foreach($MensajePropiedades as $MensajePropiedad)
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">{!! $MensajePropiedad->fecha_enviado !!}</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> {!! $MensajePropiedad->asunto !!} </span>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>