<?php

session_reset();
require "../Configuracion/crud.php";
$thime=time();
date_default_timezone_set('america/bogota');
		$fecha=date("Y-m-d-H:i:s",$thime);	

$id = $_POST['id'];
$cliente = $_POST['cliente'];
$radicado = $_POST['radicado'];
$despacho = $_POST['despacho'];
$juez = $_POST['juez'];
$fecha;
$detalle = "Actualizacion ";


$sql = " UPDATE documentacion  SET  cliente='$cliente',  radicado='$radicado' , despacho = '$despacho' , juez = '$juez' ,fecha_ultima_actualizacion='$fecha' , detalle_ultima_actualizacion = '$detalle'  WHERE id='$id'";

$verificar = $conexion->query($sql);

if($verificar){
    header("location: ../procesos.php");
}else {
    echo "hubo algun error ";
}
?>