<?php
	include '../Datos/conexion.php';
	$id= $_GET['id'];
	$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	$re = mysql_query("select archivo from tbl_documentos where id_documento=".$id.";");
	while ($f=mysql_fetch_array($re)) {
		$espera = unlink("../archivos/".$f['archivo']);
	}
	$sql = mysql_query("delete from tbl_documentos where id_documento =".$id.";");
	 
	if ($sql) { echo "<script type=\"text/javascript\">alert(\"El documento fue eliminado correctamente.\");</script>";
				echo "<script>location.href='../doc_creador.php'</script>";	   }

?>