$( document ).ready(function() {
    //var usuarios = new Array();
    $("#btn_nuevoUsuario").click(function(){
        $("#myModalLabel").text("Crear Usuario");
        $("#a_profile").css("display","none");
        $("#a_info").css("display","block");
        $("#E_ID").val(0);
        $("#T_NOMBRE").val("");
        $("#T_APELLIDOS").val("");
        $("#T_TELEFONO").val("");
        $("#T_CELULAR").val("");
        $("#T_USUARIO").val("");
        $("#T_EMAIL").val("");
        $("#T_FACEBOOK").val("");
        $("#T_INFORMACION").text("");
        $("#T_TWITTER").val("");
        $("#T_TIPO_TRABAJADOR").val("ADMINISTRADOR");
        $("#E_ID").val("");
        $("#T_DOMICILIO").val("");
        $("#T_COLONIA").val("");
        FormOption = "C";
        $('#myModal').modal('show');
    });
    
    $(".editar").click(function(event){
        event.preventDefault();
        $("#myModalLabel").text("Editar Usuario");
        $("#a_profile").css("display","block");
        $("#a_info").css("display","block");
        $("#T_NOMBRE").val(usuarios[$(this).attr("rel")].T_NOMBRE);
        $("#T_APELLIDOS").val(usuarios[$(this).attr("rel")].T_APELLIDOS);
        $("#T_TELEFONO").val(usuarios[$(this).attr("rel")].T_TELEFONO);
        $("#T_CELULAR").val(usuarios[$(this).attr("rel")].T_CELULAR);
        $("#T_USUARIO").val(usuarios[$(this).attr("rel")].T_USUARIO);
        $("#T_EMAIL").val(usuarios[$(this).attr("rel")].T_EMAIL);
        $("#T_FACEBOOK").val(usuarios[$(this).attr("rel")].T_FACEBOOK);
        $("#T_INFORMACION").text(usuarios[$(this).attr("rel")].T_INFORMACION);
        $("#T_TWITTER").val(usuarios[$(this).attr("rel")].T_TWITTER);
        $("#T_TIPO_TRABAJADOR").val(usuarios[$(this).attr("rel")].T_TIPO_TRABAJADOR);
        $("#E_ID").val(usuarios[$(this).attr("rel")].E_ID);
        $("#E_ID_IMAGE").val(usuarios[$(this).attr("rel")].E_ID);
        $("#T_DOMICILIO").val(usuarios[$(this).attr("rel")].T_DOMICILIO);
        $("#T_COLONIA").val(usuarios[$(this).attr("rel")].T_COLONIA);
        FormOption = "E";
        $('#myModal').modal('show');
    });
    
    
    $(".eliminar").click(function(event){
        event.preventDefault();
        $("#bodyEliminar").text(usuarios[$(this).attr("rel")].T_NOMBRE+ " "+usuarios[$(this).attr("rel")].T_APELLIDOS+"?");
        $("#bodyEliminar").attr("rel",usuarios[$(this).attr("rel")].E_ID);
        $('#ModalEliminar').modal('show');
    });
    
    $("#eliminarUsuario").click(function(event){
        event.preventDefault();
        $.ajax({
            url: url + 'catalogos/OpcionesUsuario',
            type:"POST",
            data: {FormOption: "D", E_ID: $("#bodyEliminar").attr("rel")},
            //dataType:"json",
            success: function(r){
                //console.log(r);
                if (r==1){
                     alert('El usuario ha sido eliminado');
                     $('#ModalEliminar').modal('hide');
                     location.reload(true);
                }else{
                    alert('El usuario no se ha podido eliminar');
                }
            }
        });
        
        $('#ModalEliminar').modal('hide');
    });
    
    
    
    $("#myModalButton").click(function(){
        $("#form-usuario").submit();
        
    });
    
      $("#form-usuario").validate({
    
        // Specify the validation rules
        rules: {
            T_NOMBRE: {
                required: true,
                maxlength: 50
            },
            T_APELLIDOS: {
                required: true,
                maxlength: 50
            },
            T_TELEFONO: {
                required: true,
                maxlength: 20,
                number: true
            },
            T_CELULAR: {
                required: true,
                maxlength: 20,
                number: true
            },
            T_USUARIO: {
                required: true,
                maxlength: 30
            },
            T_EMAIL: {
                required: true,
                email: true,
                maxlength: 50
            },
            T_PASSWORD: {
                required: true,
                minlength: 5
            },
            T_PASSWORD2: {
                required: true,
                minlength: 5,
                equalTo: "#T_PASSWORD"
            },
            T_TIPO_TRABAJADOR: {
                required: true,
                maxlength: 20
            },
            T_INFORMACION: {
                maxlength: 500
            }
        },
        
        // Specify the validation error messages
        messages: {
            T_NOMBRE: {
                required: "El campo no puede estar vacio",
                maxlength: "El campo no puede ser tan extenso"
            },
            T_APELLIDOS: {
                required: "El campo no puede estar vacio",
                maxlength: "El campo no puede ser tan extenso"
            },
            T_PASSWORD: {
                required: "El campo no puede estar vacio",
                minlength: "El campo debe tener por lo menos 5 caracteres"
            },
            T_PASSWORD2: {
                required: "El campo no puede estar vacio",
                minlength: "El campo debe tener por lo menos 5 caracteres",
                equalTo : "La contrasena no coincide"
            },
            T_EMAIL: {
                required: "El campo no puede estar vacio",
                email: "El formato del campo email es incorrecto"
            },
            T_USUARIO: {
                required: "El campo no puede estar vacio",
                maxlength: "El campo no puede ser tan extenso"
            },
            T_TELEFONO: {
                required: "El campo no puede estar vacio",
                maxlength: "El campo no puede ser tan extenso",
                number: "El campo solo permite numeros"
            },
            T_CELULAR: {
                required: "El campo no puede estar vacio",
                maxlength: "El campo no puede ser tan extenso",
                number: "El campo solo permite numeros"
            },
            T_TIPO_TRABAJADOR: {
                required: "El campo no puede estar vacio",
                maxlength: "El campo no puede ser tan extenso"
            },
            T_INFORMACION: {
                maxlength: "El campo no puede ser tan extenso"
            }
        },
        
        submitHandler: function(form) {
            var formulario = $("#form-usuario").serialize();
            $.ajax({
                url: url + 'catalogos/OpcionesUsuario',
                type:"POST",
                data: "FormOption="+FormOption+"&"+formulario,
                //dataType:"json",
                success: function(r){
                    if (r!= 0){
                        console.log(r);
                        $("#a_profile").css("display","block");
                        $("#a_info").css("display","none");
                        $("#a_profile > a").tab("show");
                        $("#E_ID_IMAGE").val(r);
                        $("#myModalButton").css("display","none");
                    }else{
                        alert('El usuario o correo ya existe en el sistema');
                    }
                }
            });
        }
    });


    Dropzone.options.myAwesomeDropzone = {
    maxFiles: 1,
    accept: function(file, done) {
        console.log(file);
        console.log("uploaded");
        done();
    },
    success: function(file, response){
        console.log(file);
        console.log(response);
        $("#myModalButton").css("display","inline-block");
        $('#myModal').modal('hide');
        alert("Perfil actualizado!");
        location.reload(true);
            },
    init: function() {
        this.on("maxfilesexceeded", function(file){
            alert("Solo un archivo por favor!");
        });
    }
    };

    
});