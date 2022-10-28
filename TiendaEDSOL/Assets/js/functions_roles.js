    var tableRoles;
    document.addEventListener('DOMContentLoaded', function(){
//pasar a formato Json los datos de la tabla
        tableRoles = $('#tablaroles').dataTable( {
            "aProcessing":true,
            "aServerside" : true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "ajax":{
                //dirigir a la base url que es la funcion y devuelve la url raiz
                "url": ""+base_url+"/Roles/getRoles",
                "dataSrc":""
            },
            // armar las columnas de las base de datos
            "columns":[
                {"data":"Idrol"},
                {"data":"Nombre"},
                {"data":"Descripcion"},
                {"data":"Estado"},
                {"data":"opciones"},
                
            ],
            //se hacen las ultimas especificaciones
            "resonsieve":"true",
            "bDestroy": true,
            "iDisplayLength": 10,
            //ordena de como se va a llenar
            "order":[[0,"asc"]]
        });
    });

    
    
    
    $('#tablaroles').DataTable();
function openModal()
{
    $('#modalFormRol').modal('show');
}