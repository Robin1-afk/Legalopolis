<?php
session_start();
require "../Configuracion/crud.php";
if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "admin" ) {
$id=$_GET['id'];

$sql = "SELECT * FROM documentacion WHERE $id = id";

$verificacion = $conexion->query($sql);
$row = $verificacion->fetch_array(MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bluebox Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../assets/css/custom-styles2.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../procesos.php"><strong>Legalopolis</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../configuracion/cerrar.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>



		<div id="page-wrapper">
		  <div class="header"> 
              
                        <h1 class="page-header">
                            <center>
                            Formulario <small> De Registro</small>
                       </center>	
                     </h1>										
                        </div>         
                        <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->

               <!--    Formulario -->
               <br>
               <center>
                   <div class="container1">
               <div class="container">    
        <div class="container">

        <div class="row">
                <div class="col-md-12">
                    
                    <div class="jumbotron">
                        <h2>Formulario</h2>
                        <form action="eje_actualizar.php" method="post"  enctype="multipart/form-data" autocomplete="off">
                            <br>
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
<br>
<label for="">Cliente</label>
<br>
 <input type="text" class="form-control  text-center" name="cliente" value="<?php echo $row['cliente'] ?>" >
 <br>
<br>
<label for="">Radicado</label>
<br>
 <input type="text" class="form-control  text-center" name="radicado" value="<?php echo $row['radicado'] ?>" >
 <br>
<br>
 <input type="hidden" class="form-control  text-center" name="actualizacion" >
 

<label for="">Despacho</label>
<br>
 <input type="text" class="form-control  text-center" name="despacho" value="<?php echo $row['despacho'] ?>" >

 <br>
<br>
 
<label for="">Juez magistrado</label>
<br>
 <input type="text" class="form-control  text-center" name="juez" value="<?php echo $row['juez'] ?>" >

 <br>
 <br>

 <input type="hidden" class="form-control  text-center" name="instancia_proceso" value="Espera"  >
 

                           <button class="btn btn-primary">Registrar</button>
                        </form></p>
                    </div>
                </div>
            </div>
          </div>
        </div>       
    </div>
</center>
</div>

        <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
	
	
	<script src="../assets/js/easypiechart.js"></script>
	<script src="../assets/js/easypiechart-data.js"></script>
	
	 <script src="../assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>

  <?php
 }else {

  header("location: ../index.php");
}
?>
</html>