<?php
 session_start();
require "configuracion/crud.php";


if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "Premium" ) {
   
$correo = $_SESSION['usuario'];

  


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

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bluebox Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles2.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>
<style>
th{
background-color: #F5F5F5;
    text-align:center;
   
}

td{
    text-align:center;
    font-size: 14px;
   

}
    
</style>
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
                <a class="navbar-brand" href="usuario.php"><strong>Legalopolis</strong></a>
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
                       
                        <li><a href="configuracion/cerrar.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
         
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
              
                        <h1 class="page-header">
                      
                            <center>
                            Tabla <small>De Procesos</small>
                       </center>	
                     </h1>
                     						
        </div>         
        <br>
                    <div class="col-md-20 col-sm-15 col-xs-15">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Procesos En Ejecucion
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                          
                                                <th style="text-align: center">#</th>
                                                <th style="text-align: center">Cliente</th>
                                                <th style="text-align: center">Radicado</th>
                                                <th style="text-align: center">Fecha de última actuación</th>
                                                <th style="text-align: center">Detalle de la última actuación</th>
                                                <th style="text-align: center">Despacho</th>
                                                <th style="text-align: center">Juez/Magistrado</th>
                                                <th style="text-align: center">Instancia del proceso</th>
                                                <th style="text-align: center">Archivo</th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <?php 
                                      
                             $sql = "SELECT * FROM  documentacion ";
                              $verificar = $conexion->query($sql);
                                  while($row = $verificar->fetch_array(MYSQLI_ASSOC)){
                                     $archivo = $row['archivo'];
                                       if ($row['correo'] == $correo ){
                                     ?>
                                        <tbody>
                                            <tr>
                                            <td><?php echo $row['id']; ?> </td>
                                            <td><?php echo $row['cliente']; ?> </td>
                                            <td><?php echo $row['radicado']; ?> </td>
                                            <td><?php echo $row['fecha_ultima_actualizacion']; ?> </td>
                                            <td><?php echo $row['detalle_ultima_actualizacion']; ?> </td>
                                            <td><?php echo $row['despacho']; ?> </td>
                                            <td><?php echo $row['juez']; ?> </td>
                                            <td><?php echo $row['instancia_proceso']; ?> </td>   
                                            
                                            <?php 
                                            
                                            
                                            ?> 
                                            <td><a  href="<?php echo $row['archivo']; ?>"><img width="45px" src="assets/img/pdf.png" alt=""></a>  </td>
                                                                                 </tr> 
                                        <?php
                                        }
                                  }
                                  
                                    ?>
                                        </tbody>  
                                    </table>
                                   
                                 <!--/.    <a href='agregar.php'><img src='assets/img/agregar.png' class='img-rounded' width=40px 40px >-->
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
               
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      <script>
    
      </script>

</body>
<?php }else {

  header("location: index.php");
}
?>
</html>