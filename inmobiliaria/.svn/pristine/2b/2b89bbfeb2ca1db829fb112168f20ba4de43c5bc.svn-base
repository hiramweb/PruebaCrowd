
<link href="<?php echo URL?>assets/css/dropzone.css" rel="stylesheet" media="screen">
<link href="<?php echo URL?>assets/css/basic.dropzone.css" rel="stylesheet" media="screen">

<script src="<?php echo URL?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo URL?>assets/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo URL?>assets/js/catalogos/tipoinmuebles.js"></script>
<SCRIPT type="text/javascript">var tipoInmueble = new Array();</SCRIPT>
<!--Start Content-->
<div id="content">
    <!--Start Main Title-->
    <div id="main-title-content" class="no-padding">
        <img src="<?php echo IMG_THEME; ?>properties/slider/fslider/p1.jpg" id="bg" alt="main-title"/>
        <div class="container">
            <div class="panel">
                <h1>Tipos de Inmubles</h1>    
                <p>Control de Tipo de Inmuebles</p>    
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
                        <div class="span8">
                            <h2 class="main-heading bottom-line"><span class="main-circle-icon"><i class="icon-user"></i></span> Nuestro Personal</h2>   
                        </div>
                        <div class="span4">
                            <a href="#" id="btn_nuevoUsuario"><h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class=" icon-circle-arrow-up"></i></span> Nuevo Usuario</h3></a>   
                        </div>
                    </div>
                    <div class="list-properties right-space">
                        <div class="property ">

                            <?php
                            
                            foreach ($tipoinmuebles as $u) {
                               
                            ?>
                                <SCRIPT type="text/javascript">
                                    var FormOption = "";
                                    tipoInmueble.push({
                                        E_ID:<?php echo $u["E_ID"]?>,
                                        T_TIPO_TRABAJADOR:'<?php echo $u["T_TIPO_INMUEBLE"]?>'
                                    });
                                </SCRIPT>
                            
                                <div class="row-fluid">
                                    <div class="span6">
                                     
                                        
                                    </div>
                                </div> <!-- /div row-fluid -->
                           
                           <?php 
                           }
                           
                            ?> 
                                    
                        </div>
                    </div><!--  End  List Properties -->
                        
                    <!--  Start Pagination -->
                    
                   
                </div>
            </div>
            <div class="span3">
                <div class="panel">
                    <!--Start Form Search Properties-->
                    <h3 class="main-heading bottom-line line-before"><span class="main-circle-icon"><i class="icon-search"></i></span>Busqueda</h3>    
                    <form class="bottom-line line-before" action="<?php echo REDIRECT ?>catalogos/usuarios" method="post">
                        <input type="hidden" name="FormOption" value="R"/>
                        <label>Nombre</label>
                        <input type="text" placeholder="Escribe un nombre" name="nombre" value="<?php echo isset($_REQUEST['nombre'])? $_REQUEST['nombre']:""; ?>" class="input-block-level"/>
                        <label>Perfil</label>
                        <select name="tipo_trabajador" class="input-block-level">
                            <option value="">Selecciona una opci&oacute;n</option>
                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                            <option value="VENDEDOR">VENDEDOR</option>
                        </select>
                        <label>Correo</label>
                        <input type="text" placeholder="Escribe un correo" name="correo" value="<?php echo isset($_REQUEST['correo'])? $_REQUEST['correo']:""; ?>" class="input-block-level"/>
                        <label>Usuario</label>
                        <input type="text" placeholder="Escribe un usuario" name="usuario" value="<?php echo isset($_REQUEST['usuario'])? $_REQUEST['usuario']:""; ?>" class="input-block-level"/>
                        <label>Tel&eacute;fono</label>
                        <input type="text" placeholder="Escribe un telefono" name="telefono" value="<?php echo isset($_REQUEST['telefono'])? $_REQUEST['telefono']:""; ?>" class="input-block-level"/>
                        <label>Celular</label>
                        <input type="text" placeholder="Escribe un celular" name="celular" value="<?php echo isset($_REQUEST['celular'])? $_REQUEST['celular']:""; ?>" class="input-block-level"/>
                        <button type="submit" class="input-block-level btn-proper btn btn-large">Buscar</button>
                    </form>
                    <!--End Form Search Properties-->
                </div>
            </div>
        </div>
    </div>
</div><!--EndContent-->
    

<!-- ELiminar Modal-->
<div id="ModalEliminar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Eliminar Usuario</h3>
  </div>
  <div class="modal-body">
      <p>&#191;Realmente desea elminar a&nbsp;<b id="bodyEliminar" rel=""></b></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal">Cancelar</button>
    <a href="#" class="btn btn-inverse" id="eliminarUsuario">Eliminar</a>
  </div>
</div>


<!-- start Modal -->
    
    
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Crear Usuarios</h3>
    </div>
    <div class="modal-body">

        <!--h4>Text in a modal</h4>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p-->
                
        <!-- Elemento para poner una linea intermedia <hr> -->
                
        <section class="">
            <ul class="nav nav-tabs bot-tab">
                <li class="active"id="a_info"><a href="#info">Informaci&oacute;n Personal</a></li>
                <li class="" id="a_profile"><a href="#profile">Foto de Perfil</a></li>
            </ul>
            <div class="tab-content custom-tab">
                <div class="tab-pane active" id="info">
                    <form action="" id="form-usuario"  method="post"> 
                        <input type="hidden" name="E_ID" id="E_ID" value="0"/>
                        <div class="box-panel ">
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
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="T_EMAIL" accesskey="E"><i class="icon-envelope"></i> Email*</label>
                                    <input type="email" class="input-block-level" name="T_EMAIL" value="" id="T_EMAIL" placeholder="your_email@address.com">
                                </div>
                                <div class="field span6">
                                    <label for="T_USUARIO" accesskey="U"><i class="icon-arrow-right"></i> Usuario*</label>
                                    <input type="text" class="input-block-level" name="T_USUARIO" value="" id="T_USUARIO" placeholder="Usuario del sistema">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="T_DOMICILIO" accesskey="D"><i class="icon-home"></i> Domicilio*</label>
                                    <input type="text" class="input-block-level" name="T_DOMICILIO" value="" id="T_DOMICILIO" placeholder="Calle #Numero">
                                </div>
                                <div class="field span6">
                                    <label for="T_COLONIA" accesskey="c"><i class="icon-arrow-right"></i> Colonia*</label>
                                    <input type="text" class="input-block-level" name="T_COLONIA" value="" id="T_COLONIA" placeholder="Colonia">
                                </div>
                            </div>   
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="T_TELEFONO" accesskey="T"><i class="icon-phone-sign"></i> Tel&eacute;fono</label>
                                    <input type="tel" class="input-block-level" name="T_TELEFONO" value="" id="T_TELEFONO" placeholder="( 000 ) 000 - 0000">
                                </div>
                                <div class="field span6">
                                    <label for="T_CELULAR" accesskey="C"><i class="icon-phone"></i> Celular*</label>
                                    <input type="tel" class="input-block-level" name="T_CELULAR" value="" id="T_CELULAR" placeholder="( 000 ) 000 - 0000">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="T_FACEBOOK" accesskey="F"><i class="icon-facebook"></i>acebook</label>
                                    <input type="text" class="input-block-level" name="T_FACEBOOK" value="" id="T_FACEBOOK" placeholder="Nombre de usuario de Facebook">
                                </div>
                                <div class="field span6">
                                    <label for="T_TWITTER" accesskey="t"><i class="icon-twitter"></i> Twitter</label>
                                    <input type="text" class="input-block-level" name="T_TWITTER" value="" id="T_TWITTER" placeholder="Nombre de usuario de Twitter">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="field span6">
                                    <label for="T_TIPO_TRABAJADOR" accesskey="S"><i class="icon-arrow-right"></i> Perfil de Sistema</label>
                                    <select name="T_TIPO_TRABAJADOR" id="T_TIPO_TRABAJADOR" class="input-block-level" required="">
                                        <option value="ADMIN">ADMINISTRADOR</option>
                                        <option value="VENTAS">VENDEDOR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <label for="T_INFORMACION" accesskey="I"><i class="icon-arrow-right"></i> Informaci&oacute;n Extra*</label>
                                <textarea rows="3" class="input-block-level" name="T_INFORMACION" id="T_INFORMACION" placeholder="Por favor introduzca algo de informaci&oacute;n"></textarea>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="profile">
                    <div style="width: 510px; height: 350px; ">
                        <form method="post" action="<?php echo REDIRECT; ?>catalogos/guardarImagenDePerfil" class="dropzone dz-clickable" id="my-awesome-dropzone">
                            <input type="hidden" name="E_ID_IMAGE" id="E_ID_IMAGE" value="0"/>
                            <!--div class="dz-default dz-message">
                                <span>Drop files here to upload</span>
                            </div-->
                        </form>
                    </div>
                </div>
            </div>
        </section>      


    </div> <!-- Fin Modal Body -->
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-inverse" id="myModalButton" action="guardar">Guardar</button>
    </div>
        
</div>
    
    
<!-- End Modal -->
    
    
    