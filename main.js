
$(document).ready(function(){
    peliculas = $("#peliculas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    Id = parseInt(fila.find('td:eq(0)').text());
    Nombre = fila.find('td:eq(1)').text();
    Descripcion = fila.find('td:eq(2)').text();
    Cover = fila.find('td:eq(3)').file();
    Minutos = fila.find('td:eq(4)').text();
    Clasificacion = fila.find('td:eq(5)').text();
    Categorias = fila.find('td:eq(6)').text();
    
    
    $("#nombre").val(Nombre);
    $("#descripcion").val(Descripcion);
    $("#cover").val(Cover);
    $("#minutos").val(Minutos); 
    $("#clasificacion").val(Clasificacion);
    $("#categorias").val(Categorias);
   
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Pelicula");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    Id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+Id+"?");
    if(respuesta){
        $.ajax({
            url: "app/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, Id:Id},
            success: function(){
                peliculas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    Nombre = $.trim($("#nombre").val());
    Descripcion = $.trim($("#descripcion").val());
    Cover = $.trim($("#cover").val());
    Minutos = $.trim($("#minutos").val());
    Clasificacion = $.trim($("#clasificacion").val());
    Categorias = $.trim($("#categorias").val());   
    $.ajax({
        url: "app/crud.php",
        type: "POST",
        dataType: "json",
        data: {Nombre:Nombre, Descripcion:Descripcion, Cover:Cover,Minutos:Minutos,Clasificacion:Clasificacion,Categorias:Categorias,Id:Id, opcion:opcion},
        success: function(data){  
            console.log(data);
            Id = data[0].id;            
            Nombre = data[0].nombre;
            Descripcion = data[0].descripcion;
            Cover = data[0].cover;
            Minutos = data[0].minutos;
            Clasificacion = data[0].clasificacion;
            Categorias = data[0].categorias;
            if(opcion == 1){peliculas.row.add([Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias]).draw();}
            else{peliculas.row(fila).data([Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});