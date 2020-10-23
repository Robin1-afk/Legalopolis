<?php 
   session_start();
   include ('configuracion/crud.php') ;

   if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "admin" ) {

    $listar = null;
    $directorio=opendir("/");
    
    while ($elemento = readdir($directorio))
    {
      if ($elemento != '.' && $elemento != '..')
      {
      if (is_dir("/".$elemento))
      {
        $listar .="<a class=' col-md-6' href='/$elemento' target='_blank'> 
        $elemento/</a>
        <br><br>";
      }
      else
      {
         $listar .="<a class=' col-md-6' href='/$elemento' target='_blank'> 
        $elemento</a>
        <br><br>";
      }
      }
    }
    
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<style>

    
td{
    text-align:center;
}

</style>
<head>
    <?php 
  
        include ('Admin/partials/head.php');
    ?>
</head>

<body>
    <?php  include ('Admin/partials/view-head-nav.php');  ?>
    <!--/head-nav  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div id="sideNav" href=""></div>
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a  href="main.php"><i class="fa fa-home" ></i> Home</a>
                </li>
                <li>
                    <a href="procesos.php"><i class="fa fa-legal"></i> Procesos</a>
                </li>
                <li>
                    <a class="active-menu" href="archivos.php"><i class="glyphicon glyphicon-folder-open" ></i>Archivos</a>
                </li>
             
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->

    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Home
            </h1>
            <ol class="breadcrumb">
                <li class="active"><a href="archivos.php">Archivos</a></li>
                <li>Directorio De Archivos</li>
               
            </ol>
        </div>
        <div id="page-inner">
            <!--  <div class="col-md-8 col-sm-12 col-xs-12"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Archivos del usuario <?php $usuario =$_GET['id']; echo $usuario; ?>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                   
                                    <th style="text-align: center">Archivos</th>
                                    <th style="text-align: center">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                              

                            
                                $sqlquery = mysqli_query($conexion,"SELECT * FROM documentacion");
                                while ($row = $sqlquery->fetch_array()){
                                    if ($row['correo'] == $usuario ){
                                ?>
                                    
                             <td><a href="<?php echo $row['archivo']; ?>"> <img width="45px" src="assets/img/pdf.png" alt=""></a> </td>  
                             <td><?php echo $row['fecha_ultima_actualizacion'] ?></td>     
                                    <?php } ?>
                                </tr>
                            </tbody> <?php    }
  
                                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>

</html>
<?php

                                }else {
                                    header('location: index.php');
                                }
?>