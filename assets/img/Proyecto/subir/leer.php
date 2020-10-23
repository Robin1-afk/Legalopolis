<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Archivo</title>
    </head>
<?php 
include('../controlador/connect_db.php'); 
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_documentos WHERE para='".$_SESSION['user']."' and id_documento='".$id."'";
$res = mysql_query($sql, $link) or die(mysql_error());
$row = mysql_fetch_assoc($res);
?>
<a class="" href="../controlador/lector.php">Volver</a><br>
<strong>Responsable:</strong> <?php echo $row['responsable']?><br />
<strong>Título:</strong> <?php echo $row['titulo']?><br />
<strong>Versión:</strong> <?php echo $row['version']?><br />
<strong>Fecha:</strong> <?php echo $row['fecha']?><br />
<strong>Descripción:</strong> <?php echo $row['descripcion']?><br />
<strong>Tipo:</strong> <?php echo $row['tipo']?><br />
<strong>Archivo:</strong><br />
<?php include("archivo.php");?>



<?php 

if($row['leido'] != "si")
{
	mysql_query("UPDATE tbl_documentos SET leido='si' WHERE id_documento='".$id."'",$link) or die(mysql_error());
}
?>
</html>