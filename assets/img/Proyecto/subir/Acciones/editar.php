<?php
	include '../Datos/conexion.php';
	$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	if ($_FILES['archivo']['name']=="") {
		mysql_query("update tbl_documentos set titulo ='".$_POST['titulo']."', version='".$_POST['version']."', fecha='".$_POST['fecha']."', descripcion='".$_POST['descripcion']."' where id_documento=".$_POST['id'].";");
	}
	else{
		$re = mysql_query("select archivo from tbl_documentos where".$_POST['id'].";");
		while ($f=mysql_fetch_array($re)) {
			unlink("../archivos/".$f['archivo']);
		}
		$ruta = "../archivos/";
		opendir($ruta);
		$destino = $ruta.$_FILES['archivo']['name'];
		copy($_FILES['archivo']['tmp_name'],$destino);
		$nombre=$_FILES['archivo']['name'];
		$sql= mysql_query("update tbl_documentos set titulo ='".$_POST['titulo']."', version='".$_POST['version']."', fecha='".$_POST['fecha']."', descripcion='".$_POST['descripcion']."' , archivo ='".$nombre."' where id_documento=".$_POST['id'].";");
	
	}
	header("Location: ../mensaje.php");

?>