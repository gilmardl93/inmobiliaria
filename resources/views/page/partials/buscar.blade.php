                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Busqueda Avanzada</h3>
                            </div>
                            <div class="panel-body search-widget">
                                {!! Form::open(['method' => 'POST', 'route' => 'page.propiedades.search2', 'class' => 'form-inline']) !!}
                                    {!! Form::hidden('clave', $hidden) !!}
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">

                                                <select name="ubigeo" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Seleccione su ciudad">
                                                	@foreach($ubigeos as $ubigeo)
                                                    <option value="{!! $ubigeo->ubigeo !!}">{!! $ubigeo->ubigeo !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>    

                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">  
                                                <input class="button btn largesearch-btn" value="Buscar" type="submit">
                                            </div>  
                                        </div>
                                    </fieldset>                                     
                                {!! Form::close() !!}
                                {!! Form::open(['method' => 'POST', 'route' => 'page.propiedades.search3', 'class' => 'form-inline']) !!}
                                    {!! Form::hidden('clave', $hidden) !!}
                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="price-range">Rango de precios ($):</label>
                                                <input type="text" class="span2" data-slider-min="0" 
                                                       data-slider-max="10000000" data-slider-step="5" name="precio"  
                                                       data-slider-value="[0,10000000]" id="price-range" ><br />
                                                <b class="pull-left color">0</b> 
                                                <b class="pull-right color">10 000 000</b>                                                
                                            </div>
                                        </div>
                                    </fieldset>      

                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">  
                                                <input class="button btn largesearch-btn" value="Buscar" type="submit">
                                            </div>  
                                        </div>
                                    </fieldset>                                     
                                {!! Form::close() !!}
   
                            </div>
                        </div>

                    </div>
                </div>