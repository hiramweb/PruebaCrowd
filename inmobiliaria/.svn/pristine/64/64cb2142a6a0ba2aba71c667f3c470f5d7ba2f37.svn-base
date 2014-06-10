$( document ).ready(function() {
    //Variables Globales
    var num = 0;
    
    //Funcion para rellenar las opciones de TIPO INMUEBLE
    var TipoInmueble = new Array();
    var Propietarios = new Array();
    $.ajax({
        url: url + 'inicio/verTipoInmuebles',
        type:"POST",
        dataType:"json",
        success: function(r){
            $.each(r, function(i, valor){
                var opt = '<option value="' + valor.E_ID + '">' + valor.T_TIPO_INMUEBLE + '</option>';
                $(opt).appendTo("#sel_tipoInmueble");
                TipoInmueble.push({
                    E_ID:valor.E_ID,
                    T_TIPO_INMUEBLE:valor.T_TIPO_INMUEBLE
                    });
            });
        }
    });
      
    //Funcion para rellenar las opciones de PROPIETARIOS
    $.ajax({
        url: url + 'inicio/verPropietarios',
        type:"POST",
        dataType:"json",
        success: function(r){
            $.each(r, function(i, valor){
                var opt = '<option value="' + valor.E_ID + '">' + valor.T_NOMBRE + " " + valor.T_APELLIDOS + '</option>';
                $(opt).appendTo("#sel_propietario");
                Propietarios.push({
                    E_ID:valor.E_ID,
                    T_NOMBRE:valor.T_NOMBRE+ " " + valor.T_APELLIDOS
                    });
            });
        }
    });
      
    //Funcion para rellenar la opcione de ESTADO
    $.ajax({
        url: url + 'inicio/verEstadosRepublica',
        type:"POST",
        dataType:"json",
        success: function(r){
            $.each(r, function(i, valor){
                var opt = '<option value="' + valor.T_NOMBRE + '">' + valor.T_NOMBRE + '</option>';
                $(opt).appendTo("#sel_estado");
            });
        }
    });
      
    $("#btnAgregarCaracteristica").click(function(){
        $.ajax({
            url: url + 'inicio/verCaracteristicasInmuebles',
            type:"POST",
            dataType:"json",
            success: function(r){
                var tag = '<div class="row-fluid" id="div_ContenedorCaracteristicas_' + num + '">' +
                '<div class="span6">' +
                '<label for="sel_caracteristica" accesskey="U">Caracteristica * <p style="color: red; float: right" onclick="eliminaCaracteristica(' + num + ');" id="a_eliminarCaracteristica_' + num + '">Eliminar</p></label>' +
                '<select class="input-block-level caracteristicaInmueble" id="sel_caracteristica_' + num + '" required="" name="sel_caracteristicaSave">' +
                '<option value="">Seleccione...</option>' +
                '</select>' +
                '</div>' +
                '<div class="field span6">' +
                '<label for="inp_cantidad" accesskey="O">Cantidad *</label>' +
                '<input type="text" class="input-block-level" name="inp_cantidad" id="inp_cantidad_' + num + '">' +
                '</div>' +
                '</div>';
                $(tag).appendTo("#div_listaCaracteritica");
                
                $.each(r, function(i, valor){
                    var opt = '<option value="' + valor.E_ID + '">' + valor.T_CARACTERISTICA + '</option>';
                    $(opt).appendTo("#sel_caracteristica_" + num + "");
                });
                num++;
            }
        });
    });
      
    $("#btnInfoGeneral").click(function(){
        var sel_tipoInmueble = $("#sel_tipoInmueble").val();
        var sel_propietario = $("#sel_propietario").val();
        var sel_concepto = $("#sel_concepto").val();
        var inp_titutlo = $("#inp_titutlo").val();
        var inp_precio = $("#inp_precio").val();
        var sel_estado = $("#sel_estado").val();
        var inp_municipio = $("#inp_municipio").val();
        var inp_colonia = $("#inp_colonia").val();
        var inp_calle = $("#inp_calle").val();
        var inp_nExterior = $("#inp_nExterior").val();
        var inp_cp = $("#inp_cp").val();
        var txa_descripcion = $("#txa_descripcion").val();
        $.post(url + 'inicio/insertarInmueble',{
            sel_tipoInmueble: sel_tipoInmueble,
            sel_propietario: sel_propietario,
            sel_concepto: sel_concepto,
            inp_titutlo: inp_titutlo,
            inp_precio: inp_precio,
            sel_estado: sel_estado,
            inp_municipio: inp_municipio,
            inp_colonia: inp_colonia,
            inp_calle: inp_calle,
            inp_nExterior: inp_nExterior,
            inp_cp: inp_cp,
            txa_descripcion: txa_descripcion
        },function(r){
            if(r != null || r != 'false'){
                var cadenaJSON = "";
                var T_CARACTERISTICAS = new Array();
                var T_CANTIDAD = new Array();
                var E_ID_INMUEBLE = r;
                $("#sel_tipoInmueble").val("");
                $("#sel_propietario").val("");
                $("#sel_concepto").val("");
                $("#inp_titutlo").val("");
                $("#inp_precio").val("");
                $("#sel_estado").val("");
                $("#inp_municipio").val("");
                $("#inp_colonia").val("");
                $("#inp_calle").val("");
                $("#inp_nExterior").val("");
                $("#inp_cp").val("");                   
                $("#txa_descripcion").val("");
                  
                $.each($(".caracteristicaInmueble option:selected"), function(i, valor){
                    T_CARACTERISTICAS.push($(this).val());
                });
                  
                $.each($("input[name='inp_cantidad']"), function(i, valor){
                    T_CANTIDAD.push($(this).val());
                });
                  
                for(var i in T_CARACTERISTICAS, T_CANTIDAD){
                    cadenaJSON += T_CARACTERISTICAS[i] +'-'+ T_CANTIDAD[i] +',';
                }
                  
                cadenaJSON = cadenaJSON.substring(0,cadenaJSON.length - 1);
                  
                $.post(url + 'inicio/insertCaracteristicaInmueble', {
                    E_ID_INMUEBLE: E_ID_INMUEBLE,
                    cadenaJSON: cadenaJSON
                }, function(r){
                    if(r == 'true'){
                        alert('Inmueble Creado Exitosamente');
                    }
                });
            } else {
                alert('El registro del inmueble ha fallado');
            }
        });
    });
      
      
      
      
      
      
      
    //----**************************TIPO INMUEBLE*************************-------------- //
      
      
      
    $("#list_tipoinmueble").click(function(event){
        event.preventDefault();
        $.ajax({
            url: url + 'catalogos/OpcionesTipoInmueble',
            type:"POST",
            data: {
                FormOption: "RA"
            },
            //dataType:"json",
            success: function(info){
                if (info!=null){
                    $("#dtable").html('<table id="tblTipoInmueble"></table>');
                    DataTableTipoInmueble(info);
                    $("#tblTipoInmueble_length > label > select").addClass('input-block-level'); 
                    $("#tblTipoInmueble_filter > label > input").addClass('input-block-level'); 
                     
                }else{
                    alert('khj');
                }
            }
        });
          
        $('#myModal').modal('show');
    });
      
    $( "body" ).on( "click", ".tblTipoInmueble_delete", function(event) {
        event.preventDefault();
        var r = confirm("Realmente deseas borrar este registro?");
        if (r == true)
        {
            $.ajax({
                url: url + 'catalogos/OpcionesTipoInmueble',
                type:"POST",
                data: {
                    FormOption: "D",
                    E_ID:$(this).attr("x") 
                },
                //dataType:"json",
                success: function(info){
                    if (info==1){
                        alert('Tipo de inmueble eliminado');
                        
                    }else{
                        alert('No se pudo eliminar el tipo de inmueble, intente de nuevo');
                    }
                }
            });
        }
    });  
   
    $( "body" ).on( "click", "#add_tipoinmueble", function(event) {
        event.preventDefault();
        $(this).popover({
            title: 'INMUEBLE', 
            html:true,
            content: '<div class="row-fluid"><div class="field span9">'+
        '<label for="inp_tipoInmueble" accesskey="A">Tipo</label>'+
        '<input type="text" class="input-block-level" name="inp_tipoInmueble" id="inp_tipoInmueble">'+
        '</div><div class="field span3"><label >Agregar</label><button type="button" id="cl_addTipoInmueble" class="btn-proper btn pull-right"><i class="icon-ok-circle"></i></button></div></div>'
        });  
     
    });
    
    $( "body" ).on( "click", "#cl_addTipoInmueble", function(event) {
        event.preventDefault();
        $.ajax({
            url: url + 'catalogos/OpcionesTipoInmueble',
            type:"POST",
            data: {
                FormOption: "C",
                E_ID:0,
                T_TIPO_INMUEBLE:$("#inp_tipoInmueble").val()
            },
            //dataType:"json",
            success: function(info){
                if (info!=null){
                    alert('Tipo de inmueble creado');
                }else{
                    alert('No se pudo crear el tipo de inmueble, intente de nuevo');
                }
            }
        });
        
    });
    
    
    
    $( "body" ).on( "click", "#add_propietario", function(event) {
        event.preventDefault();
        
     
    });
    
    
    //----**************************TIPO INMUEBLE*************************-------------- //
    
    
     $("#list_propietario").click(function(event){
        event.preventDefault();
        $.ajax({
            url: url + 'catalogos/OpcionesPropietario',
            type:"POST",
            data: {
                FormOption: "RA"
            },
            //dataType:"json",
            success: function(info){
                if (info!=null){
                    $("#dtable2").html('<table id="tblPropietario"></table>');
                    DataTablePropietario(info);
                    $("#tblPropietario_length > label > select").addClass('input-block-level'); 
                    $("#tblPropietario_filter > label > input").addClass('input-block-level'); 
                     
                }else{
                    alert('khj');
                }
            }
        });
          
        $('#myModal2').modal('show');
    });
    
     $( "body" ).on( "click", ".tblPropietario_view", function(event) {
        event.preventDefault();
        $(this).popover({
            title: 'PROPIETARIO',
            placement:'left',
            html:true,
            content: '<div class="row-fluid"><div class="field span12">'+
        '<label for="inp_tipoInmueble" accesskey="A">Tipo</label>'+
        '<input type="text" class="input-block-level" name="inp_tipoInmueble" id="inp_tipoInmueble">'+
        '</div></div>'
        });  
     
    });
    
    
      
//----**************************TIPO INMUEBLE*************************-------------- //
      
}); //FIN DEL DOCUEMT READY

function eliminaCaracteristica(cont){
    $("#div_ContenedorCaracteristicas_" + cont).fadeOut('slow', function(){
        $(this).remove();
    });
}


function DataTableTipoInmueble(info) {
    var table = new DataTable();
    table.TableName = "tblTipoInmueble";      //Establece el nombre de la tabla
    table.SetRUD("D");                         //Asignas los permisos de la tabla
    var thead = table.SetThead(new Array(false, "TIPO"));    //El primer campo corresponde al checkbox, los demas son las columnas correspondientes
    var trs = "";
    $.each(info, function (i, valor) {
        trs += table.SetTr(new Array(valor.E_ID, valor.T_TIPO_INMUEBLE)); //Arroja las filas para de la tabla
    });
    var tableInfo = table.SetTable(thead, trs); //Obtiene el html de la tabla ya formada
    table.updateDatatable(tableInfo);    //Crea o actualiza la tabla con el datable.js
}


function DataTablePropietario(info) {
    var table = new DataTable();
    table.TableName = "tblPropietario";      //Establece el nombre de la tabla
    table.SetRUD("RD");                         //Asignas los permisos de la tabla
    var thead = table.SetThead(new Array(false, "NOMBRE","TELEFONO"));    //El primer campo corresponde al checkbox, los demas son las columnas correspondientes
    var trs = "";
    $.each(info, function (i, valor) {
        trs += table.SetTr(new Array(valor.E_ID, valor.T_NOMBRE +" "+valor.T_APELLIDOS,valor.T_TELEFONO)); //Arroja las filas para de la tabla
    });
    var tableInfo = table.SetTable(thead, trs); //Obtiene el html de la tabla ya formada
    table.updateDatatable(tableInfo);    //Crea o actualiza la tabla con el datable.js
}