<!--Start Content-->
            <div id="content">
                <!--Start Main Title-->
                <div id="main-title-content" class="no-padding">
                    <img src="<?php echo URL ?>proper_theme/images/properties/slider/fslider/p1.jpg" id="bg" alt="main-title"/>
                    <div class="container">
                        <div class="panel">
                            <h1>Propiedades</h1>    
                            <p>Coinsidencias con tu Busqueda</p>    
                        </div>
                    </div>
                </div> <!--End Main Title-->

                <!--    News Carousel -->
                <div class="news-carousel-wrapper">
                    <dl id="news-carousel" class="news-carousel-style">
                        <dt><a href="#">News Link Here</a></dt>
                        <dd>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet.</dd>
                        <dt><a href="#">Promo Link Here</a></dt>
                        <dd>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet.</dd>
                        <dt><a href="#">Another Link Here</a></dt>
                        <dd>Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet, ipsum dolor sit amet.</dd>
                    </dl>
                </div><!--  End News Carousel -->

                <div class="container">
                    <div class="row-fluid">
                        <div class="span9">
                            <div class="panel right-line">
                                <!--  Start List Properties -->
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-building"></i></span> Lista de Propiedades</h2>   
                                    </div>
                                    <div class="span6 ">
                                        <div class="main-heading bottom-line line-before filterarea">
                                            <form class="filterform">
                                                <select class="">
                                                    <option>Asc</option>
                                                    <option>Desc</option>
                                                </select>
                                                <select class="">
                                                    <option>Price</option>
                                                    <option>Location</option>
                                                </select>

                                            </form>

                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="list-properties right-space">
                                    <?php $cont = 0; ?>
                                    <?php foreach($filtroInmuebles as $val) { ?>
                                    <div class="property ">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="property-images">
                                                    <a href="<?php echo REDIRECT."publico/detalles/".$val['E_ID']."" ?>">
                                                        <div class="mask">
                                                            <div class="desc-type for-sale"><?php echo $val['T_CONCEPTO'] ?></div>
                                                            <div class="price"><?php echo $val['F_PRECIO'] ?></div>
                                                        </div>
                                                        <img src="<?php echo URL."assets/img/inmuebles/inmueble_".$val['E_ID']."/1.jpg" ?>" alt="property"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="property-details">
                                                    <h3><a href="#"><?php echo $val['T_COLONIA'] ?></a></h3>
                                                    <p><?php echo $val['T_DESCRIPCION'] ?></p>
                                                    <p>
                                                        <?php $arrCaracteristicas = $caracteristicas[$cont]; ?>
                                                        <?php foreach($arrCaracteristicas as $key) { ?>
                                                        <span class="label"><i class="icon-circle-arrow-right"></i> <?php echo utf8_decode($key['T_CARACTERISTICA']) ?> : <?php echo $key['T_CANTIDAD'] ?></span>
                                                        <?php } ?>
                                                    </p>
                                                    <div class="agent-preview">
                                                        <div class="agent-image pull-left"  ><a href="#"><img src="<?php echo URL ?>proper_theme/images/agents/a1.jpg" class="img-polaroid" alt="property"></a></div>
                                                        <div class="agent-contant pull-right">
                                                            <ul class="unstyled">
                                                                <li><i class="icon-phone"></i> (+89)98732.984 </li>
                                                                <li><i class="icon-envelope"></i> agent@company.com</li>
                                                                <li><i class="icon-facebook"></i> angel</li>
                                                                <li><i class="icon-twitter"></i> @angel</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $cont++; ?>
                                    </div>
                                    <?php } ?>
                                </div><!--  End  List Properties -->
                                <!--  Start Pagination -->
                                <!--div class="pagination pagination-large">
                                    <ul>
                                        <li><a href="#"><i class=" icon-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class=" icon-angle-right"></i></a></li>
                                    </ul>
                                </div-->
                            </div>
                        </div>
                        <div class="span3">
                            <div class="panel">
                                <!--Start Form Search Properties-->
                                <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-search"></i></span>  Find Properties</h3>    
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
                                                    <option value="500000">500000</option>
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

                                    <button type="submit" class="input-block-level btn-proper btn btn-large" name="btn_Buscar" id="btn_Buscar"> Buscar</button>
                                </form>
                                <!--End Form Search Properties-->

                                <!--Start List Our Agent-->
                                <h3 class="bottom-line  line-before main-heading"><span class="main-circle-icon"><i class="icon-list"></i></span>  Our Agents</h3>
                                <div class="list-items ">

                                    <div class="item">
                                        <div class="img-preview">
                                            <img src="<?php echo URL ?>proper_theme/images/agents/thum_list/a2.jpg" alt="Corin Langpost" />
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
                                            <img src="<?php echo URL ?>proper_theme/images/agents/thum_list/a1.jpg" alt="Corin Langpost" />
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
            </div><!--EndContent-->