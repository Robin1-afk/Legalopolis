<?php
session_start();
include ('configuracion/crud.php') ;

   if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "admin" ) {
       
    $sql = "SELECT * FROM  documentacion  ";
    $verificar = $conexion->query($sql);
   
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
    <?php include ('Admin/partials/head.php'); ?>

<script type="text/javascript">

function ConfirmDelete(){

    var respuesta = confirm("Estas seguro de que quieres cambiar la instancia del proceso?");
    if(respuesta == true){
        return true;
    }
    else {
        return false;
    }
}

</script>

<body>
    <?php  include ('Admin/partials/view-head-nav.php') ?>
    <!-- /head-nav -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="main.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="procesos.php" class="active-menu"><i class="fa fa-legal"></i> Procesos</a>
                </li>
                <li>
                    <a href="archivos.php"><i class="glyphicon glyphicon-folder-open" ></i>Archivos</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Procesos 
            </h1>
            <ol class="breadcrumb">
                
                <li class="active">Procesos</li>
            </ol>

        </div>
        
        <!--  <div class="col-md-8 col-sm-12 col-xs-12"> -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabla de Procesos
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center">No.</th>
                                <th style="text-align: center">Usuario</th>
                                <th style="text-align: center">Cliente</th>
                                <th style="text-align: center">Radicado</th>
                                <th style="text-align: center">Despacho</th>
                                <th style="text-align: center">Juez / Magistrado</th>
                                <th style="text-align: center">Documento</th>
                                <th style="text-align: center">Instancia del proceso</th>
                                <th style="text-align: center">Actualizar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                
                                while($raw = $verificar->fetch_array(MYSQLI_ASSOC)){
                                    $archivo = $raw['archivo'];

                                ?> 
                                
                                <td><?php echo $raw['id'] ;?></td>
                                <td><?php echo $raw['correo'] ;?></td>
                                <td><?php echo $raw['cliente'] ;?></td>
                                <td><?php echo $raw['radicado'] ;?></td>
                                <td><?php echo $raw['despacho'] ;?></td>
                                <td><?php echo $raw['juez'] ;?></td>
                                <td><a href="<?php echo $raw['archivo']; ?>"> <img width="45px" src="assets/img/pdf.png" alt=""></a> </td>       
                                <td>
                              <form action="instancia.php" method="post">
                             
                                <select name="instancia" id="instancia" class="form-control">
                                    <option  value="Espera" <?php if($raw['instancia_proceso'] =='Espera') echo'selected'; ?> >En espera</option>
                                    <option value="tramitando" <?php if($raw['instancia_proceso'] =='tramitando') echo'selected'; ?>  >Tramitando</option>
                                    <option value="tramitado" <?php if($raw['instancia_proceso'] =='tramitado') echo'selected'; ?>  >Tramitado</option>
                                </select>
                                </td>
                                
                                <input type="hidden" name="id" value="<?php echo $raw['id'] ?>">

                            
                                <td><a href="usuario_pre/actualizar.php?id=<?php echo $raw['id'] ?>" class="glyphicon glyphicon-pencil"></a></td>
                  <td><button onclick="return ConfirmDelete()" class="btn btn-primary">Confirmar</button></td>
                            </tr></form>
                           
                        </tbody> 
                        <?php   
                         }
                                       // mysqli_free_result($value);
                                       
                        ?> 
                    </table><a  href="usuario_pre/agregar.php" class="btn btn-primary">Agregar Nuevo Informe</a>
                    
                          
            </div>
            </div>
        </div></div>
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
   }else{
       header("location:  ../index.php");
   }
?>