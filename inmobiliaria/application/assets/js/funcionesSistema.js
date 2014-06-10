
function GenerateDatatable(TableName, info, opcion) {
        $(TableName + " tbody").html(info);
        switch (opcion) {
            case "ORDENAR":
                $(TableName).dataTable().fnSort([[3, 'asc']]);
                break;
            case "ORDENAR_1":
                $(TableName).dataTable().fnSort([[1, 'asc']]);
                break;
            case "1":
                //$(TableName).dataTable().fnSort([[1, 'asc']]);
                $(TableName).dataTable({
                    "aoColumns": [
                      {"bSortable": false},
                      null,
                      {"bSortable": false}
                    ]
                });
                break;
            default:
                $(TableName).dataTable();
                //code to be executed if n is different from case 1 and 2
        }
}

function updateDatatable(TableName, info, opcion) {
    try {
        $(TableName).dataTable().fnDestroy();
    }
    catch (err) {
        console.log("Error description: " + err.message);
    }
    if (info) {
        GenerateDatatable(TableName, info, opcion);
    } else {
        $(TableName).dataTable();
    }
}

//Funcion para crear los elementos dentro de otros en el datatable. 
function ElementoHTML(){
    this.id = null;
    this.Class = null;
    this.title = null;
    this.name = null;
    this.href = null;
    this.info = null;
    this.elementInside = null;
    this.x = null;
    this.visible = false;
}

//Clase para crear los DataTables. 
function DataTable() {
    this.Caption = "";
    this.TableName = "";
    this.Table = new Array();
    this.Thead = new Array();
    this.Tbody = new Array();
    this.Tfoot = new Array();
    this.RUD = false;
    this.OptEditar = new ElementoHTML();            //CRUD
    this.OptVer = new ElementoHTML(); 
    this.OptEliminar = new ElementoHTML();
    this.Checkbox = new ElementoHTML();  //  Checkbox                       Opciones

    this.SetRUD = function (RUD) {
        this.RUD = RUD;
        switch (this.RUD) {
            case "R":
                this.OptVer.visible = true;
                this.OptEditar.visible = false;
                this.OptEliminar.visible = false;
                break;
            case "RU":
            case "UR":
                this.OptVer.visible = true;
                this.OptEditar.visible = true;
                this.OptEliminar.visible = false;
                break;
            case "RD":
            case "DR":
                this.OptVer.visible = true;
                this.OptEliminar.visible = true;
                this.OptEditar.visible = false;
                break;
            case "RUD":
            case "RDU":
            case "DRU":
            case "DUR":
            case "URD":
            case "UDR":
                this.OptVer.visible = true;
                this.OptEditar.visible = true;
                this.OptEliminar.visible = true;
                break;
            case "U":
                break;
            case "UD":
            case "DU":
                this.OptVer.visible = false;
                this.OptEditar.visible = true;
                this.OptEliminar.visible = true;
                break;
            case "D":
                this.OptVer.visible = false;
                this.OptEditar.visible = false;
                this.OptEliminar.visible = true;
                break;
            default:
                this.OptVer.visible = false;
                this.OptEditar.visible = false;
                this.OptEliminar.visible = false;
                //code to be executed if n is different from case 1 and 2
        }
    };

    this.SetCheckbox = function (id) {
        if (this.Checkbox.visible == true) {
            this.Checkbox.id = this.TableName + "_id_"+id;
            this.Checkbox.name = "check_"+this.TableName;
            return '<td class="center"><label><input type="checkbox" class="ace" id="' + this.Checkbox.id + '" name="' + this.Checkbox.name + '"><span class="lbl"></span></label></td>';
        } else {return "";}
    };
    
    this.SetOptView = function (id) {
        if (this.OptVer.visible == true) {
            this.OptVer.id = this.TableName + "_ViewId_" + id;
            this.OptVer.Class = this.TableName + "_view blue";
            //this.OptVer.href = "#";
            this.OptVer.title = "Ver";
            //this.OptVer.elementInside = '<i class="icon-zoom-in bigger-130"></i>';
            this.OptVer.x = id;
            return '<a class="' + this.OptVer.Class + '" href="#" x="' + this.OptVer.x + '" id="' + this.OptVer.id + '"><i class="icon-zoom-in bigger-130"></i></a> ';
        } else {return "";}
    };

    this.SetOptEdit = function (id) {
        if (this.OptEditar.visible == true) {
            this.OptEditar.id = this.TableName + "_EditId_"+id;
            this.OptEditar.Class = this.TableName + "_edit green";
           // this.OptEditar.href = "#";
            this.OptEditar.title = "Editar";
            //this.OptEditar.elementInside = '<i class="icon-pencil bigger-130"></i>';
            this.OptEditar.x = id;
            return '<a class="' + this.OptEditar.Class + '" href="#" x="' + this.OptEditar.x + '" id="' + this.OptEditar.id + '"><i class="icon-pencil bigger-130"></i></a> ';
        } else {return "";}
    };
    this.SetOptDelete = function (id) {
        if (this.OptEliminar.visible == true) {
            this.OptEliminar.id = this.TableName + "_DeleteId_" + id;
            this.OptEliminar.Class = this.TableName + "_delete red";
            //this.OptVer.href = "#";
            this.OptEliminar.title = "Borrar";
            //this.OptVer.elementInside = '<i class="icon-trash bigger-130"></i>';
            this.OptEliminar.x = id;
            return '<a class="' + this.OptEliminar.Class + '" href="#" x="' + this.OptEliminar.x + '" id="' + this.OptEliminar.id + '"><i class="icon-trash bigger-130"></i></a> ';
        } else {return "";}
    };

    this.SetThead = function (thead) {  //{ true/false, fila1,fila2,filaN}
        var Thead = '<thead><tr>';
        this.Checkbox.visible = thead[0];
        if (thead[0] == true) {
            Thead += '<th></th>';
        }
        for (var i = 1; i < thead.length ; i++) {
            Thead += '<th>' + thead[i] + '</th>';
        }
        if (this.RUD != "R") {
            Thead += '<th>Opciones</th>';
        }
        Thead += '</tr></thead>';
        return Thead;
    };

    this.SetTr = function (tr) {  //{#,fila1,fila2,filaN}
        var Tr = '<tr>';
        Tr += this.SetCheckbox(tr[0]);
        for (var i = 1; i < tr.length ; i++) {
            Tr += '<td>' + tr[i] + '</td>';
        }
        Tr += this.RUD != "R" ? '<td><div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">' : "";
        Tr += this.SetOptView(tr[0]);
        Tr += this.SetOptEdit(tr[0]);
        Tr += this.SetOptDelete(tr[0]);
        Tr += this.RUD != false ? '</div></td>' : "";
        Tr += '</tr>';
        return Tr;
    };

    this.SetTable = function (thead, Trs) {
        var Table = '<table id="'+this.TableName+'" style="width:100% !important;">';
        Table += this.Caption != null ? '<caption>'+this.Caption +'</caption>': "";
        Table += thead;
        Table += '<tbody>';
        Table += Trs;
        Table += '</tbody>';
        Table += '</table>';
        return Table;
    };

    this.GenerateDatatable = function (opcion) {
        switch (opcion) {
            case "ORDENAR":
                $("#" + this.TableName).dataTable().fnSort([[3, 'asc']]);
                break;
            case "ORDENAR_1":
                $("#" + this.TableName).dataTable().fnSort([[1, 'asc']]);
                break;
            case 1:
            case "1":
                //$(TableName).dataTable().fnSort([[1, 'asc']]);
                $("#" + this.TableName).dataTable({
                    "aoColumns": [
                      {"bSortable": false},
                      null,
                      {"bSortable": false}
                    ]
                });
                break;
            default:
                $("#" + this.TableName).dataTable();
                //code to be executed if n is different from case 1 and 2
        }
        $("#" + this.TableName).css('width', '100%');
    };

    this.updateDatatable = function (tableInfo, opcion) {
        if (isDataTable (this.TableName) == true){
            try{
                $("#"+this.TableName).dataTable().fnDestroy();
            }
            catch (err) {
                console.log("Error description: " + err.message);
            }
        }
        
        $("#" + this.TableName).html(tableInfo);
        this.GenerateDatatable(opcion);
    };

}


function isDataTable ( nTable )
{
    var settings = $.fn.dataTableSettings;
    for ( var i=0, iLen=settings.length ; i<iLen ; i++ )
    {
        if ( settings[i].nTable == nTable )
        {
            return true;
        }
    }
    return false;
}

