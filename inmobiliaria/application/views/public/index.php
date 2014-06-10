<!-- start Content -->
            <div id="content">
                <div class="panel googleMaparea">
                    <div id="googleMap" class="">         
                    </div>
                    <div class="map-with-agent visible-desktop"> 
                        <h3 >Your Message Here</h3>
                        <img src="<?php echo URL?>proper_theme/images/agents/n5.png" alt="ceo"/>
                    </div>
                </div>
                <!--    News Carousel-->
                <div class="news-carousel-wrapper">
                    <dl id="news-carousel" class="news-carousel-style">
                        <dt><a href="#">News Link Here</a></dt>
                        <dd>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet.</dd>
                        <dt><a href="#">Promo Link Here</a></dt>
                        <dd>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet.</dd>
                        <dt><a href="#">Another Link Here</a></dt>
                        <dd>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet.</dd>
                    </dl>
                </div>
                <!--    End News Carousel-->

                <div class="container">
                    <div class="row-fluid">
                        <div class="span9">
                            <div class="panel right-line">
                                <!--Start Grid Featured-->
                                <h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-building"></i></span> Propiedades m&aacute;s Recientes</h2>   
                                <div class="featured-grid right-space">
                                    <div class="box-white">
                                        <div class="grid-item grid-style-properties">
                                            <?php $cont = 0; ?>
                                            <?php foreach ($inmuebles as $val) { ?>
                                            <div class="item">
                                                <a href="<?php echo REDIRECT."publico/detalles/".$val['E_ID']; ?>" class="with-hover">
                                                    <?php if($val['T_CONCEPTO'] === 'Renta') { ?><div class="for_rent_banner"></div><?php } else { ?><div class="for_sale_banner"></div><?php } ?>
                                                    <img alt='images' src="<?php echo URL?>assets/img/inmuebles/inmueble_<?php echo $val['E_ID'] ?>/1.jpg" class="full"/><span class="mask_hover"></span>
                                                </a>
                                                <h4 class=" "><?php echo $val['T_TITULO'] ?></h4>
                                                <div class="preview-properties ">
                                                    <div class="box-detail"> 
                                                        <p class="text-center short-detail">
                                                            <?php 
                                                            $arrCaracteristicas = $caracteristicas[$cont];
                                                            foreach ($arrCaracteristicas as $key) { 
                                                            ?>
                                                                <span class="label" style="font-size: 11px;"><i class="icon-circle-arrow-right"></i> <?php echo utf8_decode($key['T_CARACTERISTICA']) ?> : <?php echo $key['T_CANTIDAD'] ?></span>
                                                            <?php 
                                                             }
                                                             $cont ++;
                                                            ?>
                                                            <span class="price"><?php echo '$ '.$val['F_PRECIO'] ?></span>
                                                        </p>
                                                        <div class="clearfix">
                                                            <a href="<?php echo REDIRECT."publico/detalles/".$val['E_ID']; ?>" class="btn-proper btn btn-small pull-left">Ver Detalles</a>
                                                            <a href="#" class="btn-proper btn btn-small pull-right">Email</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!--End Grid Featured-->
                                </div>

                                <!--Start New List-->
                                <h2 class="main-heading bottom-line top-line "><span class="main-circle-icon"><i class="icon-book"></i></span> Noticias</h2>   
                                <div class=" news right-space">
                                    <div class="media box-white">
                                        <a class="pull-left" href="#">
                                            <img alt="images" class="media-object" src="<?php echo URL?>proper_theme/images/news/thum/n1.jpg">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Investor Club</h4>
                                            <p>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet, consectetur fermentum adipiscing elit. 
                                                Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet, consectetur fermentum adipiscing elit.</p>
                                            <a href="#" class="btn-proper btn btn-small ">Read More</a>
                                        </div>
                                    </div>
                                    <div class="media box-white">
                                        <a class="pull-left" href="#">
                                            <img alt="images" class="media-object" src="http://placehold.it/150x90">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Investor Club</h4>
                                            <p>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet, consectetur fermentum adipiscing elit. 
                                                Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet, consectetur fermentum adipiscing elit.</p>
                                            <a href="#" class="btn-proper btn btn-small ">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End News List-->
                            </div>
                        </div>
                        <div class="span3">
                            <div class="panel">
                                <!--Start Form Search Properties-->
                                <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-search"></i></span>  Buscar Inmueble</h3>    
                                <form class="bottom-line line-before" action="<?php echo REDIRECT."publico_filtro/filtroInmuebles"; ?>" method="post">
                                    <label>Municipio</label>
                                    <select name="T_MUNICIPIO" id="T_MUNICIPIO" class="input-block-level" required="">
                                        <option value="">Seleccione...</option>
                                        <option value="Armería">Armer&iacute;a</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Comala">Comala</option>
                                        <option value="Coquimatlán">Coquimatl&aacute;n</option>
                                        <option value="Cuauhtémoc">Cuauht&eacute;moc</option>
                                        <option value="Ixtlahuacán">Ixtlahuac&aacute;n</option>
                                        <option value="Manzanillo">Manzanillo</option>
                                        <option value="Minatitlán">Minatitl&aacute;n</option>
                                        <option value="Tecomán">Tecom&aacute;n</option>
                                        <option value="Villa de Álvarez">Villa de &Aacute;lvarez</option>
                                    </select>
                                    <label>Colonia</label>
                                    <input type="text" name="T_COLONIA" id="T_COLONIA" class="input-block-level" required="">
                                    <div class="control-group-form">
                                        <div class="control-group half pull-left">
                                            <label class="control-label" >Precio Minimo</label>
                                            <div class="controls">
                                                <select name="F_PRECIO_MIN" id="F_PRECIO_MIN" class="input-block-level" required="">
                                                    <option value="">All</option>
                                                    <option value="100000">100000</option>
                                                    <option value="200000">200000</option>
                                                    <option value="300000">300000</option>
                                                    <option value="400000">400000</option>
                                                    <option value="5000000">500000+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group half text-right pull-right">
                                            <label class="control-label">Precio M&aacute;ximo</label>
                                            <div class="controls">
                                                <select name="F_PRECIO_MAX" id="F_PRECIO_MAX" class="input-block-level" required="">
                                                    <option value="">All</option>
                                                    <option value="1000000">1000000</option>
                                                    <option value="2000000">2000000</option>
                                                    <option value="3000000">3000000</option>
                                                    <option value="4000000">4000000</option>
                                                    <option value="50000000">5000000+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="control-group-form">
                                        <div class="control-group half pull-left">
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox" id="checkbox" value="Renta"> Renta 
                                            </label>
                                        </div>
                                        <div class="control-group half text-right pull-right">
                                            <label class="checkbox">
                                                <input type="checkbox" name="checkbox" id="checkbox" value="Venta"> Venta
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <label>Metros de Frente</label>
                                    <input type="text" name="T_METROS_FRENTE" id="T_METROS_FRENTE" class="input-block-level" required="">
                                    <label>Metros de Largo</label>
                                    <input type="text" name="T_METROS_LARGO" id="T_METROS_LARGO" class="input-block-level" required="">

                                    <button type="submit" class="input-block-level btn-proper btn btn-large"> Buscar</button>
                                </form>
                                <!--End Form Search Properties-->

                                <!--Start List Our Agent-->
                                <h3 class="bottom-line  line-before main-heading"><span class="main-circle-icon"><i class="icon-list"></i></span>  Our Agents</h3>
                                <div class="list-items ">

                                    <div class="item">
                                        <div class="img-preview">
                                            <img src="<?php echo URL?>proper_theme/images/agents/thum_list/a2.jpg" alt="Corin Langpost" />
                                        </div>
                                        <div class="item-desk">
                                            <div class="title">
                                                <h3><a href="#">Angelina Cos</a></h3>
                                            </div>
                                            <div class="location">Palo Alto CA</div>
                                            <a href="#" class="btn-proper btn-mini btn">Profile Page</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="img-preview">
                                            <img src="<?php echo URL?>proper_theme/images/agents/thum_list/a1.jpg" alt="Corin Langpost" />
                                        </div>
                                        <div class="item-desk">
                                            <div class="title">
                                                <h3><a href="#">Angelina Cos</a></h3>
                                            </div>
                                            <div class="location">Palo Alto CA</div>
                                            <a href="#" class="btn-proper btn-mini btn">Profile Page</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item">
                                        <div class="img-preview">
                                            <img src="http://placehold.it/100x80" alt="Corin Langpost" />
                                        </div>
                                        <div class="item-desk">
                                            <div class="title">
                                                <h3><a href="#">Angelina Cos</a></h3>
                                            </div>
                                            <div class="location">Palo Alto CA</div>
                                            <a href="#" class="btn-proper btn-mini btn">Profile Page</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--End List Our AGents -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>