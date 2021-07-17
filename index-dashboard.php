<?php require_once 'vistas-d/parte-superior.php' ?>
<?php
require_once 'app/connectionBD.php';
$conn = mysqli_connect("127.0.0.1","root","","netflix");
$consulta = "SELECT Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias FROM peliculas"; ?>


<!--FIN del cont principal-->
<!-- FIN DEL CONTENIDO PRINCIPAL -->
<?php require_once  "vistas-d/parte-inferior.php"?>



