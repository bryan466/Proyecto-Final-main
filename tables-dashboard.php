<?php
require_once 'app/connectionBD.php';
$conn = mysqli_connect("127.0.0.1","root","","netflix");
$consulta = "SELECT Id,Nombre,Descripcion,Cover,Minutos,Clasificacion,Categorias FROM peliculas"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index-dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
          


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Paginas</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cuentas</h6>
                        <a class="collapse-item" href="login.PHP">Iniciar sesion</a>
                        <a class="collapse-item" href="registrarse.php">Registrarse</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Otras paginas</h6>
                        <a class="collapse-item" href="index.php">inicio</a>
                        <a class="collapse-item" href="categories.php">categorias</a>
                        <a class="collapse-item" href="peliculas.php">peliculas</a>
                       
                    </div>
                </div>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables-dashboard.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>

                <div class="container-pagina">
                <h1>Contenido principal</h1>
                <br>
                <h4> Peliculas </h4>

                        <div class="row">
                            <div class="col-lg-12">            
                            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
                            </div>    
                        </div>    
                    </div>    
                    <br>  
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">        
                                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                                        <thead class="text-center">
                                            <tr>
                                                    <th> Id </th>
                                                    <th>Nombre</th>&nbsp;&nbsp;&nbsp;
                                                    <th>Descripcion</th>&nbsp;&nbsp;&nbsp;
                                                    <th>Cover</th>&nbsp;&nbsp;&nbsp;
                                                    <th >Minutos</th>&nbsp;&nbsp;&nbsp;
                                                    <th >Clasificacion</th>&nbsp;&nbsp;&nbsp;
                                                    <th >Categorias</th>&nbsp;&nbsp;&nbsp;
                                                    <th COLSPAN="2">Operacion</th>&nbsp;
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                            
                                                $result = mysqli_query($conn, $consulta);
                                                while($row = mysqli_fetch_assoc($result)){ ?>                                                      
                                            <tr>
                                                <td><?php echo $row['Id'] ?></td>
                                                <td><?php echo $row["Nombre"]?></td> 
                                                <td><?php echo $row["Descripcion"];?> </td> 
                                                <td><?php echo $row["Cover"];?> </td> 
                                                <td><?php echo $row["Minutos"];?>  </td>  
                                                <td><?php echo $row["Clasificacion"];?>  </td> 
                                                <td><?php echo $row["Categorias"];?>  </td> 
                                            <!--  <td><button class= "btn btn-primary btnEditar">Editar</button></td> 
                                                <td><button class= "btn btn-danger btnBorrar">Borrar</button></td> -->
                                            </tr>
                                            <?php
                                                }  mysqli_free_result($result);?>   
                                                
                                                <script src="javascript/confirmacion.js"></script>  
                                                                        
                                        </tbody>        
                                    </table>                    
                                    </div>
                                </div>
                        </div>  
                    </div>    
                    
                <!--Modal para CRUD-->
                <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <form id="formPersonas">    
                            <div class="modal-body">
                                <div class="form-group">
                                <label for="nombre" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre">
                                </div>
                                <div class="form-group">
                                <label for="descripcion" class="col-form-label">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion">
                                </div>                
                                <div class="form-group">
                                <label for="cover" class="col-form-label">Cover(Imagen): </label>
                                <input type="file" name="archivosubido" id=cover>
                                </div>    
                                <div class="form-group">
                                <label for="minutos" class="col-form-label">Minutos:</label>
                                <input type="text" class="form-control" id="minutos">
                                </div>     
                                <div class="form-group">
                                <label for="clasificacion" class="col-form-label">Clasificacion:</label>
                                <input type="text" class="form-control" id="clasificacion">
                                </div>     
                                <div class="form-group">
                                <label for="categorias" class="col-form-label">Categorias:</label>
                                <input type="text" class="form-control" id="categorias">
                                </div>             
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                            </div>
                        </form>    
                        </div>
                    </div>
                </div>  