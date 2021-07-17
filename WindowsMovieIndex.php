<?php
   require "app/connectionBD.php";
   
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
            Peliculas Bj
	</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.89'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
    <div class="contenedor">
        <div class="header">
                <div class="logo">
                        <img src="img/icon (1).png"  height="45px">  
                </div>
                    
                    <div class="name"> <a  style="color:white"; font-weight:bold;  href="#">Peliculas Bj</a></div>
                    
                        <div class="menu-index">
                            <ul id="menu">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="">Generos</a>                            </li>
                            <li><a href="login.php" >Inciar sesion</a></li>
                            <li><a href= "registrarse.php" >Registrarte</a></li>
                            <li><a href="administrador.php">administrador</a></li>
                            </ul>
                        </div>
        </div>

        <div class="img-perfil-peliculas" >
        <img src="img/380x570.jpg" height= "330px" width="230px"></div>

        <div class = "titulo-info-pelicula">
                <h2>
                <strong>  El Halloween de Hubbie</strong> 
                </h2>      
                <br>
                <p>
                <strong>   Sinopsis.</strong>  Pese a su devoción por el pueblo de Salem, Hubie Dubois (Sandler) <br>
                reconoce que la noche de Halloween no es precisamente la más atractiva para <BR>
                los jóvenes desde hace unos años. En esta ocasión, no obstante, algo <br>
                distinto está a punto de suceder, y sólo él podrá salvar esta mágica noche.<br>
                </p>
                <br>
                <p>
               <strong> Protagonistas:</strong> Adam Sandler, Kevin James, Julie Bowen, Ray Liotta, Rob Schneider,<br>
                June Squibb, Kenan Thompson, Shaquille O'Neal, Steve Buscemi y Maya Rudolph.<br>
               <strong> Título: </strong> El Halloween de Hubie.<br>
               <strong> Guion:</strong>  Adam Sandler; Tim Herlihy.<br>
               <strong> Producción: </strong> Adam Sandler, Allen Covert.<br>
                </p>
        </div>
        

        <?php
                $API_KEY = "atsyZcjMpsI";
                $CHANNRL_ID ="UC5ZiUaIJ2b5dYBYGf5iEUrA";
                $MAX_RESULTS = 1;

                $videoLista  = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channerId='.CHANNEL_ID.'&maxResults='
                .$MAX_RESULTS.'&key ='.$API_KEY.''));

                foreach($videoLista->items as $item) {
                    if(isset($item->id->videoId)){
                        echo '<div class="youtube-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/atsyZcjMpsI" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2>'.$item->snippet->title.'</h2>
                        </div>';
                    }
                }
        ?>



    </div>
</body>
</html>