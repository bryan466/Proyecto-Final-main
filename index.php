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
    <link rel='stylesheet' type='text/css'  href='css/estilos.css?v=0.0.88'/>
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
                            <li><a href="login.php" >Inciar sesion</a></li>
                            <li><a href= "registrarse.php" >Registrarte</a></li>
                            <li><a href="administrador.php">administrador</a></li>
                            </ul>
                        </div>
        </div>


                <div class="random">
                    <div class="random-img"><img src="img/ghost4.jpg"   height= "610px" width="1360px" > </div>
                    <div class="inimg1">
                    <a href = "WindowsMovieIndex.php" ><img src="img/380x570.jpg"   height= "390px" width="290px" ></a>
                    </div>
                    
                    <h2 class = "titulo-hubbie"><strong>El Halloween de Hubbie</strong></h2>
                  
                    <div class="descripcion1">
                    <p>
                    Hubie Dubois, un hombre muy miedica residente en Salem<br>
                    que deberá armarse de valor en la noche de Halloween <br>
                    para poder proteger su ciudad de una terrible maldición<br>
                    que empieza a afectar a los lugareños.<br>
                    </p>
                    </div>
                    <a href = "WindowsMovieIndex.php" > <button class="ver" >  VER PELICULA </button> </a>
                    <button class="ver2" onclick="location.href='https://www.youtube.com/watch?v=M-9Qc_HLa0Y&list=RDM-9Qc_HLa0Y&start_radio=1'"> VER TRAILER</button>
                </div>
        
        <br>
        <br>
        <br>
        <br>
        <br>
            <div class="slider2">
                <div class="random2">
                    <div class ="estreno">
                      <label  class="estrenos">Peliculas destacadas</label>
                    </div> 

                    <br>
                    <br>
                      <table class="tab">
                            <tr>
                                <td>
                                    <div class="imgnom1">
                                        <img src="img/losguardianes.jpg"   height= "300px" width="210px" >
                                    </div>
                                </td>
                                <td>
                                    <div class="imgnom2">
                                        <img src="img/newmutans.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                </td>

                                <td>
                                    <div class="imgnom3">
                                        <img src="img/bajomar.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    
                                </td>
                              
                                <td>
                                    <div class="imgnom4">
                                        <img src="img/ava.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                    
                                </td>

                                <td>
                                    <div class="imgnom5">
                                        <img src="img/bill&ted.jpg"   height= "300px" width="210px" >
                                    </div>
                  
                                   
                                </td>
                            </tr>
                        </table>
                </div>
    
            </div>

                    <br>
                    <br>
                    <br>
            <div class="movie">
                <div class="movies">
                    <label style="color:rgb(0, 0,0)" class="recientes">  Péliculas estrenadas </label>
                        <br>
                        <br>
                        <table class="tab2">
                            <tr>

                                <td>
                                    <div class="view7">
                                        <img src="img/monster.jpg"   height= "250px" width="175px" >
                                    </div>
                    
                                    <div class= "nomview7">    
                                        <label class= "nomview7">Love and Monsters</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view8">
                                        <img src="img/sos.jpg"   height= "250px" width="175px" >
                                    </div>
                    
                                    <div class= "nomview8">    
                                        <label style="color:rgb(0, 0,0)">S.O.S. Survive or Sacrifice</label>
                                    </div>
                                </td>   

                                <!--CODIGO NUEVO SEGUNDO TR -->
                                <td>
                                    <div class="view9">
                                        <img src="img/borat.jpg"   height= "250px" width="175px" >
                                    </div>
                    
                                   <div class= "nomview9">    
                                        <label style="color:rgb(0, 0,0)">Borat</label>
                                    </div> 
                                </td>

                                <td>
                                    <div class="view10">
                                        <img src="img/candy_corn.jpg"   height= "250px" width="175px" >
                                    </div>
                    
                                   <div class= "nomview10">    
                                        <label style="color:rgb(0, 0,0)">Candy corn</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view11">
                                        <img src="img/cuaderno-tomy.jpg"   height= "250px" width="175px" >
                                    </div>
                    
                                    <div class= "nomview11">    
                                        <label style="color:rgb(0, 0,0)">Cuaderno de tommy</label>
                                    </div> 
                                </td>

                                <td>
                                    <div class="view12">
                                        <img src="img/behid_the__line_escape_to_dunkirk.jpg"   height= "250px" width="175px" >
                                    </div>
                    
                                   <div class= "nomview12">    
                                        <label style="color:rgb(0, 0,0)">Behid the line escape to dunkirk</label>
                                    </div> 
                                </td>

                            </tr>
<br>
                           <!-- CODIGO DE LA TERCAR LINEA DE PELICULAS DE TABLA DE RECOMENDACION -->
                            <tr>

                                <td>
                                    <div class="view13">
                                        <img src="img/Dreamland.jpg"   height= "250px" width="172px" >
                                    </div>

                                 <div class= "nomview13">    
                                        <label style="color:rgb(0, 0,0)">Dreamland</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view14">
                                        <img src="img/el_secuestro_de_daniel_rye.jpg"   height= "250px" width="175px" >
                                    </div>

                                   <div class= "nomview14">    
                                        <label>El secuestro de Daniel Rye</label>
                                    </div> 
                                </td>   

                            
                                <td>
                                    <div class="view15">
                                        <img src="img/estado_mental.jpg"   height= "250px" width="175px" >
                                    </div>

                                    <div class= "nomview15">    
                                        <label>Estado Mental</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view16">
                                        <img src="img/free_solo.jpg"   height= "250px" width="175px" >
                                    </div>

                                   <div class= "nomview16">    
                                        <label>SFree solo</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view17">
                                        <img src="img/green_book.jpg"   height= "250px" width="175px" >
                                    </div>

                                   <div class= "nomview17">    
                                        <label>Green Book</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="view18">
                                        <img src="img/historias_lamentables.jpg"   height= "250px" width="175px" >
                                    </div>

                                   <div class= "nomview18">    
                                        <label>Historias Lamentables</label>
                                    </div>
                                
                                </td>

                            </tr>

                        </table>
                    <br>

                    <div class="movie-estreno">
          
                            <label style="color:rgb(0, 0,0)" class="recientes3"> Proximamente </label>
                                <br>
                                <br>
                                <table class="tab3">
                                    <tr>
                                        <td>
                                                    <div class="view19">
                                                        <img src="img/The_Conjuring3_Obligado_por_el_demonio.jpg"   height= "250px" width="175px" >
                                                    </div>
                                    
                                                    <div class= "nomview19">    
                                                        <label>The Conjuring 3</label>
                                                    </div> 
                                                </td>

                                                <td>
                                                    <div class="view20">
                                                        <img src="img/intercambio_de_princesas_2.jpg"    height= "250px" width="175px" >
                                                    </div>
                                    
                                                    <div class= "nomview20">    
                                                        <label>Intercambio de princesas 2</label>
                                                    </div> 
                                                </td>

                                                <td>
                                                    <div class="view21">
                                                        <img src="img/isla_de_perros.jpg"    height= "250px" width="176px">
                                                    </div>
                                    
                                                  <div class= "nomview21">    
                                                        <label>Isla de perros</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="view22">
                                                        <img src="img/jui.jpg"   height= "250px" width="176px" >
                                                    </div>
                                    
                                                   <div class= "nomview22">    
                                                        <label>Jui jui</label>
                                                    </div>
                                                 
                                                </td>

                                                <td>
                                                    <div class="view23">
                                                        <img src="img/la_discusion.jpg"  height= "250px"width="178px" >
                                                    </div>
                                    
                                                   <div class= "nomview23">    
                                                        <label>La discusion</label>
                                                    </div>
                                                    
                                                </td>

                                                <td>
                                                    <div class="view24">
                                                        <img src="img/mama_te_quiere.jpg"    height= "250px" width="176px" >
                                                    </div>
                                    
                                                   <div class= "nomview24">    
                                                        <label>mama te quiere</label>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <div class="view25">
                                                        <img src="img/monster_hunter.jpg"   height= "250px" width="175px" >
                                                    </div>
                                    
                                                    <div class= "nomview25">    
                                                        <label>Monster Hunter </label>
                                                    </div> 
                                                </td>

                                                <td>
                                                    <div class="view26">
                                                        <img src="img/paddington_2.jpg"    height= "250px" width="175px" >
                                                    </div>
                                    
                                                   <div class= "nomview26">    
                                                        <label>Paddington</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="view27">
                                                        <img src="img/sed_de_venganza.jpg"    height= "250px" width="176px">
                                                    </div>
                                    
                                                    <div class= "nomview27">    
                                                        <label>Sed de venganza</label>
                                                    </div> 
                                                </td>

                                                <td>
                                                    <div class="view28">
                                                        <img src="img/testamento_de_la_abuela.jpg"   height= "250px" width="176px" >
                                                    </div>
                                    
                                                   <div class= "nomview28">    
                                                        <label>Testamento_de_la_abuela</label>
                                                    </div> 
                                                </td>

                                                <td>
                                                    <div class="view29">
                                                        <img src="img/transhood_crecer_transgenero.jpg"  height= "250px"width="178px" >
                                                    </div>
                                    
                                                    <div class= "nomview29">    
                                                        <label>Transhood Crecer Transgenero</label>
                                                    </div> 
                                                </td>

                                                <td>
                                                    <div class="view30">
                                                        <img src="img/Vilas_seras_lo_que_debas_ser_o_no_seras_nada.jpg"    height= "250px" width="176px" >
                                                    </div>
                                    
                                                   <div class= "nomview30">    
                                                        <label>Vilas seras lo que debas ser</label>
                                                    </div> 
                                                </td>
                                            </tr>

                                </table>
                    </div>

                            <br>
                            <br>



                    <div class="movie-pro">
                        
                        <label class="recientes2">Estrenos 2021 </label>
                            <br>
                            <br>
                            <table class="tab4">
                                <tr>
                                    <td>
                                        <div class="view31">
                                            <img src="img/Halloween_kills.jpg"   height= "250px" width="175px" >
                                        </div>
                        
                                       <div class= "nomview31">    
                                            <label>Halloween kills</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="view32">
                                            <img src="img/los_Croods_2_Una_nueva_era.jpg"    height= "250px" width="175px" >
                                        </div>
                        
                                        <div class= "nomview32">    
                                            <label>Los Croods 2 </label>
                                        </div> 
                                    </td>

                                    <td>
                                        <div class="view33">
                                            <img src="img/Rumble_la_liga_de_los_monstruos.jpg"    height= "250px" width="176px">
                                        </div>
                        
                                       <div class= "nomview33">    
                                            <label>Rumble </label>
                                        </div> 
                                    </td>

                                    <td>
                                        <div class="view34">
                                            <img src="img/Sin_tiempo_para_morir.jpg"   height= "250px" width="176px" >
                                        </div>
                        
                                        <div class= "nomview34">    
                                            <label>Sin tiempo para morir</label>
                                        </div> 
                                    </td>

                                    <td>
                                        <div class="view35">
                                            <img src="img/soul.jpg"  height= "250px"width="178px" >
                                        </div>
                        
                                      <div class= "nomview35">    
                                            <label>Soul</label>
                                        </div> 
                                    </td>

                                    <td>
                                        <div class="view36">
                                            <img src="img/The_KingsMan_La_primera_misión.jpg"    height= "250px" width="176px" >
                                        </div>
                        
                                       <div class= "nomview36">    
                                            <label>The_KingsMan</label>
                                        </div> 
                                    </td>
                                </tr>

                                </table>
                    </div>


                    <div class="cuadro">
                        <div class="descp"> <p>Nuestros servidores no almacenan ningún vídeo, estos se encuentran alojados en sitios de terceros  y Todos los derechos estan reservados.</p> </div>
                    </div>      



                </div>       
            </div>
        </div>



    </div>
</body>
</html>