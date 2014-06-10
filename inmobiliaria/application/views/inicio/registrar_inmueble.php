 
<div id="content">
    <div id="main-title-content">
        <img src="<?php echo URL ?>proper_theme/images/properties/slider/fslider/p1.jpg" id="bg" alt="main-title"/>
        <div class="container">
            <div class="panel">
                <h1>Registro</h1>    
                <p>de Inmuebles</p>    
            </div>
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
            <div class="span3">
                <div class="panel ">
                    <h2 class="main-heading bottom-line line-after"><span class="main-circle-icon"><i class="icon-check"></i></span> Instrucciones</h2>   
                    <p>
                        Proper Realestate<br>
                        Marketing Dept<br>
                        12-123 1/2 Rodaria SE<br>
                        Toronto ON M1B2P4<br>
                        Paris
                    </p>
                    <strong>Phone:</strong> +1 1800.43.989 <br>  
                    <strong>Fax:</strong> 416.556.4657 <br>
                    <strong>Email:</strong> <a href="mailto:someone@email.com"> someone@company.com</a>
                </div>
            </div>
            <div class="span9">
                <div class="panel left-line">
                    <h3 class="bottom-line main-heading box-panel"><span class="main-circle-icon"><i class="icon-map-marker"></i></span> GeoLocalización</h3>
                    <iframe id="map"  width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=arvada&amp;aq=&amp;sll=39.777936,-105.074272&amp;sspn=0.149605,0.338173&amp;ie=UTF8&amp;hq=&amp;hnear=Arvada,+Jefferson,+Colorado&amp;ll=39.802764,-105.087484&amp;spn=0.299124,0.676346&amp;t=m&amp;z=11&amp;output=embed"></iframe>    
                    <h3 class="bottom-line main-heading box-panel"><span class="main-circle-icon"><i class="icon-cloud-upload"></i></span> Ingresar la información del inmueble</h3>
                    <form>
                        <div class="box-panel ">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label for="sel_tipoInmueble" accesskey="U">Tipo de Inmueble * 
                                    <a href="#" data-toggle="popover" data-placement="top"  id="add_tipoinmueble" class="btn-proper btn btn-small pull-right" ><i class="icon-file"></i></a>
                                    <a href="#" class="pull-right">&nbsp;</a>
                                    <a href="#" id="list_tipoinmueble" class="btn-proper btn btn-small pull-right"><i class="icon-list"></i></a>
                                    
                                    </label>
                                    <select class="input-block-level" id="sel_tipoInmueble" name="">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                                <div class="field span6">
                                    <label for="sel_propietario" accesskey="O">Propietario *
                                    <a href="#" data-toggle="popover" data-placement="top"  id="add_propietario" class="btn-proper btn btn-small pull-right" ><i class="icon-file"></i></a>
                                    <a href="#" id="" class="pull-right">&nbsp;</a>
                                    <a href="#" id="list_propietario" class="btn-proper btn btn-small pull-right"><i class="icon-list"></i></a>
                                    </label>
                                    <select class="input-block-level" id="sel_propietario" name="sel_propietario">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="sel_concepto" accesskey="O">Concepto *</label>
                                    <select class="input-block-level" id="sel_concepto" name="sel_concepto">
                                        <option value="">Seleccione...</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Renta">Renta</option>
                                    </select>
                                </div>
                                <div class="field span6">
                                    <label for="sel_estado" accesskey="P">Estado *</label>
                                    <select class="input-block-level" id="sel_estado" name="sel_estado">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="inp_precio" accesskey="P">Precio *</label>
                                    <input type="text" class="input-block-level" name="inp_precio" id="inp_precio">
                                </div>
                                <div class="field span6">
                                    <label for="inp_titutlo" accesskey="P">Títutlo *</label>
                                    <input type="text" class="input-block-level" name="inp_titutlo" id="inp_titutlo">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="inp_municipio" accesskey="P">Municipio *</label>
                                    <input type="text" class="input-block-level" name="inp_municipio" id="inp_municipio">
                                </div>
                                <div class="field span6">
                                    <label for="inp_colonia" accesskey="P">Colonia *</label>
                                    <input type="text" class="input-block-level" name="inp_colonia" id="inp_colonia">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="inp_calle" accesskey="P">Calle *</label>
                                    <input type="text" class="input-block-level" name="inp_calle" id="inp_calle">
                                </div>
                                <div class="field span6">
                                    <label for="inp_nExterior" accesskey="P">No. Exterior *</label>
                                    <input type="text" class="input-block-level" name="inp_nExterior" id="inp_nExterior">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="inp_cp" accesskey="P">Código Postal *</label>
                                    <input type="text" class="input-block-level" name="inp_cp" id="inp_cp">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <label for="txa_descripcion" accesskey="C">Descripción *</label>
                                <textarea id="txa_descripcion" rows="4" class="input-block-level" name="txa_descripcion" placeholder="Escribir la descripción de la distribución de la casa."></textarea>
                            </div>
                            <br/>
                            <button type="button" class="btn-proper btn " id="btnInfoGeneral"> Guardar <i class="icon-arrow-right"></i></button>
                            <button type="button" class="btn-proper btn " id="btnAgregarCaracteristica" style="float: right;" > Agregar Caracteristica <i class="icon-arrow-right"></i></button>
                        </div>

                    </form>
                    <!-- INICIO LISTA CARACTERISTICAS -->
                    <div class="box-panel " id="div_listaCaracteritica">
                        <!-- LISTA LLENADA CON AJAX -->
                        <br>
                    </div>
                    <!-- FIN LISTA CARACTERISTICAS -->
                </div>
            </div>
        </div>
    </div>
</div>




<!-- start Modal -->
    
    
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Lista de Tipo de Inmuebles</h3>
    </div>
    <div class="modal-body">
        
        <div class="row-fluid">
            <div class="span12" id="dtable">

            </div>
        </div>

    </div> <!-- Fin Modal Body -->
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cerrar</button>
    </div>
        
</div>
    
    
<!-- End Modal -->
    
<!-- start Modal 2-->
    
    
<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Propietarios</h3>
    </div>
    <div class="modal-body">
        
            
            <section class="">
            <ul class="nav nav-tabs bot-tab">
                <li class="active"id="a_info"><a href="#info">Lista</a></li>
                <li class="" id="a_profile"><a href="#profile">Mas..</a></li>
            </ul>
                <div class="tab-content custom-tab">
                    <div class="tab-pane active" id="info">
                        <div class="row-fluid">
                            <div class="span12" id="dtable2">
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="row-fluid">
                            <div class="span6">
                                <label for="T_NOMBRE" accesskey="N"><i class="icon-arrow-right"></i> Nombre*</label>
                                <input type="text" class="input-block-level" name="T_NOMBRE" value="" id="T_NOMBRE" placeholder="Nombre">
                            </div>
                            <div class="field span6">
                                <label for="T_APELLIDOS" accesskey="A"><i class="icon-arrow-right"></i> Apellidos*</label>
                                <input type="text" class="input-block-level" name="T_APELLIDOS" value="" id="T_APELLIDOS" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="field span6">
                                <label for="T_PASSWORD" accesskey="P"><i class="icon-lock"></i> Contrase&ntilde;a*</label>
                                <input type="password" class="input-block-level" name="T_PASSWORD" value="" id="T_PASSWORD" placeholder="Contrase&ntilde;a*">
                            </div>
                            <div class="field span6">
                                <label for="T_PASSWORD2" accesskey="p"><i class="icon-lock"></i> Confirma Contrase&ntilde;a*</label>
                                <input type="password" class="input-block-level" name="T_PASSWORD2" value="" id="T_PASSWORD2" placeholder="Contrase&ntilde;a*">
                            </div>
                        </div>
                    </div>
                </div>
            </section>   
                
    </div> <!-- Fin Modal Body -->
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cerrar</button>
    </div>
        
</div>
    
    
<!-- End Modal 2-->



<script src="<?php echo URL?>assets/js/registro_inmueble.js"></script>