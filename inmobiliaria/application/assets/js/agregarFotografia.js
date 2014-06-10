$( document ).ready(function() {
   //Funcion para obtener una lista de inmuebles
   $.ajax({
        url: url + 'inicio/verInmuebleTablaAgregarImagenes',
        type:"POST",
        dataType:"json",
        success: function(r){
            $.each(r, function(i, valor){
                var tr = '<tr class="gradeA" id="tr_'+valor.E_ID+'">' +
                                    '<td class="center" id="td_titulo_'+valor.E_ID+'" rel="'+valor.T_TITULO+'">' + valor.T_TITULO + '</td>' +
                                    '<td class="center">' + valor.T_ESTADO + '</td>' +
                                    '<td class="center">' + valor.T_MUNICIPIO + '</td>' +
                                    '<td class="center">' + valor.T_COLONIA + '</td>' +
                                    '<td class="center"><a href="#myModal" onclick="agregaImagen(' + valor.E_ID + ');"><i class="icon-plus-sign"></i></a></td>' +
                            '</tr>';
                $(tr).appendTo("#tbl_Inmuebles");
            });
            $('#example').dataTable();
        }
      });
      
      Dropzone.options.myAwesomeDropzone = {
        maxFiles: 1,
        accept: function(file, done) {
            console.log("uploaded");
            console.log(file);
            done();
        },
        success: function(file, response){
                    console.log(file);
                    console.log(response);
                }
        /*init: function() {
            this.on("maxfilesexceeded", function(file){
                alert("El nombre de esta foto ya existe!, favor de poner otro.");
            });
        }*/
      };

}); // FIN DEL DOCUMENT READY

function agregaImagen(id){
    $("#E_ID_INMUEBLE").val(id);
    var titulo = $("#td_titulo_"+id).attr("rel");
    $("#myModalLabel").text(titulo);
    $("#myModal").modal("show");
    $.post(url + 'inicio/crearDirectorioFotografiasInmueble', {
        id: id
    }, function(r){
        console.log(r);
    });
}