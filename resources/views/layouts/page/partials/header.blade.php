        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            @foreach($contactos as $row)
                            <p>
                                <span><i class="pe-7s-call"></i> {!! $row->telefono1 !!}</span>
                                <span><i class="pe-7s-mail"></i> {!! $row->email1 !!}</span>
                            </p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                @foreach($socials as $social)
                                @if(!empty($social->facebook))
                                <li><a href="{!! url($social->facebook) !!}" target="_lblank"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                @if(!empty($social->twitter))                                
                                <li><a href="{!! url($social->twitter) !!" target="_lblank"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>