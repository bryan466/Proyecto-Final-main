<?php
include_once 'app/connectionBD.php';
$conn = mysqli_connect("127.0.0.1","root","","netflix");
$consulta = "SELECT Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias FROM peliculas"; 

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['Nombre'])) ? $_POST['Nombre'] : '';
$descripcion = (isset($_POST['Descripcion'])) ? $_POST['Descripcion'] : '';
$cover = (isset($_POST['Cover'])) ? $_POST['Cover'] : '';
$minutos = (isset($_POST['Minutos'])) ? $_POST['Minutos'] : '';
$clasificacion = (isset($_POST['Clasificacion'])) ? $_POST['Clasificacion'] : '';
$categorias = (isset($_POST['Categorias'])) ? $_POST['Categorias'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['Id'])) ? $_POST['Id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO peliculas(Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias) VALUES('$nombre', '$descripcion',
        '$cover','$minutos','$clasificacion','$categorias') ";	
        $result = mysqli_query($conn, $consulta);	
        $result->execute();

        $consulta = "SELECT Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias FROM peliculas ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $consulta);	
        $result->execute();
        break;
    case 2: //modificación
        $consulta = "UPDATE peliculas SET Nombre='$nombre',Descripcion='$descripcion', Cover='$cover',Minutos = '$minutos',Clasificacion = '$clasificacion',  categorias = '$categorias' WHERE id='$id' ";		
        $result = mysqli_query($conn, $consulta);	
        $result->execute();  
        
        $consulta = "SELECT Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias FROM peliculas WHERE id='$id' ";       
        $result = mysqli_query($conn, $consulta);	
        $result->execute();
        break;        
    case 3://baja
        $consulta = "DELETE FROM peliculas WHERE Id='$id' ";		
        $result = mysqli_query($conn, $consulta);	
        $result->execute();                       
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
 $conn = NULL;