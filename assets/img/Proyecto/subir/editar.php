<?php 
	include "datos/conexion.php";
	$fecha = date("j/m/Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script  type="text/javascript"> 
$(document).ready( function() { 
  var el = $('.test'); 
  function change( amt ) { 
    el.val( parseInt( el.val(), 10 ) + amt ); 
  } 
  
  $('.up').click( function() { 
    change( 1 ); 
  } ); 
  
} ); 

</script> 
    
    
    
    <title>Modificaciones</title>
</head>
<style>
body{
    background:url(bg.jpg);
}

* form {  
    padding: 20px 0px 0px 30px; 
    font-family:verdana,arial; 
    font-size:9pt; 
}  

textarea {
position: relative;
 top:  -22px; 
 left: 0px;

}
div {
	width: 430px; margin: 60px auto; padding: 50px 30px;
	background: #c9d0de; border: 1px solid #e1e1e1;
	-moz-box-shadow: 0px 0px 8px #444;
	 border-radius: 10px;
	-webkit-box-shadow: 0px 0px 1px #444;
}



</style>
<body>

<div style="width: 500px;margin: auto;border: 0px solid blue;padding: 30px;">
<form action="Acciones/editar.php" method="POST" enctype="multipart/form-data">

		
			<label>Título:</label>
			<?php
			$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
			mysql_select_db($db,$con)or die("no existe la base de datos");
			$re = mysql_query("select titulo,version,fecha,descripcion from tbl_documentos where id_documento = ".$_GET['id'].";");
			while ($f=mysql_fetch_array($re)){
				?>
			<label><input type="text" name="titulo"<?php echo 'value="'.$f['titulo'].'"';?> /></label><br><br>
		
		
			<label>Version:</label>
			<label><input type="text" class="test" name="version" <?php echo 'value="'.$f['version'].'"';?> readonly/></label>
            <label>Fecha:</label>
			<label><input type="text" name="fecha" <?php echo 'value="'.$fecha.'"';?> readonly/></label>
            <br><br><br><textarea rows="20" cols="61" name="descripcion" <?php echo 'value="'.$f['descripcion'].'"';?> maxlength="1000" placeholder="Nueva información..."></textarea>
			<?php } ?>
			<input type="hidden" name="id" value=<?php echo '"'.$_GET['id'].'"'; ?> />
	
	<br>
	<input type="file" name="archivo"/>
	<br/>
	<br>
	<input type="submit" value="Guardar cambios" class="up" title="Guardar los cambios"/>
</form>
</div>
</body>
</html>