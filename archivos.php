<?php 
   session_start();
   include ('configuracion/crud.php') ;

   if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "admin" ) {

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
            Directorio De Archivos
            </h1>
            <ol class="breadcrumb">
                <li class="active">Archivos</li>
            </ol>
        </div>
        <div id="page-inner">
            <!--  <div class="col-md-8 col-sm-12 col-xs-12"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Archivos
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <th style="text-align: center">Usuarios</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                 
                                $sqlquery = mysqli_query($conexion,"SELECT * FROM usuario WHERE tipo_usuario !='admin' ");
                                while ($row = $sqlquery->fetch_array()){
                                    $usuario = $row['usuario'];
                                    echo"<td>  <a href='archivos_us.php?id=$usuario'><img width='150px' src='assets/img/carpeta.png' class='img-rounded' width='50px'/></a><br> $usuario  </td>";
                               
                                   ?>   
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