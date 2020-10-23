<?php
session_start();


if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "admin" ) {
require "../Configuracion/crud.php";

$thime=time();
date_default_timezone_set('america/bogota');
$file =$_FILES['archivo']['name'];
$file_tump = $_FILES['archivo']['tmp_name'];

$rute = "../".$file;
move_uploaded_file($file_tump,$rute);


$sql = "SELECT * FROM  usuario ";
$verificar = $conexion->query($sql);
while($row = $verificar->fetch_array(MYSQLI_ASSOC)){ 
 $cedula = $row['cedula'];
 $nombre = $row['nombre_usuario'];
}

$cedula;
$nombre;
$correo = $_POST['usuario'];
$fecha=date("Y-m-d-H:i:s",$thime);	
$cliente=$_POST['cliente'];
$radicado=$_POST['radicado'];
$actualizacion=$_POST['actualizacion'];
$despacho=$_POST['despacho'];
$juez = $_POST['juez'];
$instancia=$_POST['instancia_proceso'];



$sql = "INSERT INTO documentacion (cliente, radicado, fecha_ultima_actualizacion , detalle_ultima_actualizacion, despacho , juez , instancia_proceso , archivo, cedula , correo , nombre_usuario) 
VALUE ('$cliente' ,'$radicado' ,'$fecha', '$actualizacion','$despacho', '$juez' , '$instancia','$file','$cedula','$correo','$nombre')";

$verificar = $conexion->query($sql);

if($verificar){

header("location: ../procesos.php");
    
}
else{
    echo "error";
}

?>

<?php
 }else {

  header("location: ../index.php");
}
?>