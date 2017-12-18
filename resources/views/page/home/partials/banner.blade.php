        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    @foreach($banners as $banner)
                    <div class="item"><img src="{!! url('storage/'.$banner->imagen) !!}" alt="GTA V"></div>
                    @endforeach

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>PYM INMOBILIARIA</h2>
                        
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            {!! Form::open(['method' => 'POST', 'route' => 'page.propiedades.search', 'class' => 'form-inline']) !!}
                                @if (session('danger'))
                                <div class="alert alert-danger" role="alert">
                                    {!! session('danger') !!}
                                </div>
                                @endif 
                                <div class="form-group">                                   
                                    <select name="ubigeo" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Seleccione la ciudad">
                                        <option value=""> -Ubigeo- </option>
                                        @foreach($ubigeos as $ubigeo)
                                        <option value="{!! $ubigeo->ubigeo !!}">{!! $ubigeo->ubigeo !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select name="tipo" id="basic" class="selectpicker show-tick form-control">
                                        <option value=""> -Tipo- </option>
                                        @foreach($tipos as $tipo)
                                        <option value="{!! $tipo->tipo !!}">{!! $tipo->tipo !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select name="estado" id="basic" class="selectpicker show-tick form-control">
                                        <option value=""> -Estado- </option>
                                        @foreach($estados as $estado)
                                        <option value="{!! $estado->estado !!}">{!! $estado->estado !!}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>                               

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>