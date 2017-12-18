                            <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-primary"> {!! $NegocioPropietarios->count() !!} </span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        @if($NegocioPropietarios->count() == 1)
                                        <h3>Tiene <span class="bold">{!! $NegocioPropietarios->count() !!}</span> Mensaje</h3>
                                        @else
                                        <h3>Tiene <span class="bold">{!! $NegocioPropietarios->count() !!}</span> Mensajes</h3>
                                        @endif
                                        <a href="{!! url('negocio-propietarios') !!}">Ver Todo</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            @foreach($NegocioPropietarios as $NegocioPropietario)
                                            <li>
                                                <a href="#">
                                                    <span class="subject">
                                                        <span class="from"> {!! $NegocioPropietario->datos !!} </span>
                                                        <span class="time"> {!! $NegocioPropietario->fecha_enviado !!} </span>
                                                    </span>
                                                    <span class="message"> {!! $NegocioPropietario->asunto !!} </span>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>