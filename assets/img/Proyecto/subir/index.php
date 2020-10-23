<!DOCTYPE html>
<meta charset="UTF-8">
<title>Documentos</title>
<?php
session_start();
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $fecha = date("j/m/Y");
	$tipo = $_POST['tipo'];
	$tamano = $_FILES['archivo']['size'];
	$respo = $_POST['responsable'];
	$ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre !="" && !empty($_POST['para'])) {
   	if (copy($ruta, $destino)) {
           	$para= $_POST['para'];
		    $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(para,titulo,version,fecha,descripcion,tipo,responsable,archivo,id_usuario) VALUES('".$para."','".$titulo."','0.0','".$fecha."','".$descri."','".$tipo."','".$respo."','".$nombre."','".$_SESSION['identificacion']."')";
            $query = $db->execute($sql);
            if($query){
                echo "<script type=\"text/javascript\">alert(\"Se guardo correctamente.\");</script>";  
            }
        } else {
            echo "<script type=\"text/javascript\">alert(\"Hubo un error, intente nuevamente.\");</script>"; 
        }
    }
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<style type="text/css">   
body{
    background:url(bg.jpg);
}

h5 { 
   font-size:12pt; 
   color: #8A8E27;
  font-weight: normal;
  font-family: Arial, Helvetica, sans-serif;
}

h3 {
	color: #666666;
	font-weight: normal;
	font-family: Arial, Helvetica, sans-serif;  
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
    </head>
    <body>
			<div style="width: 500px;margin: auto;border: 0px solid blue;padding: 30px;">
           <center><h3>NUEVOS DOCUMENTOS</h3></center>
            
            <form method="post" action="" enctype="multipart/form-data">
                	Título:
                    <input type="text" name="titulo">
                    Para:
					<input type="text" name="para" />
              <h5>Descripción</h5>
                        <textarea rows="12" cols="60" name="descripcion" maxlength="1000"></textarea>

                   		Responsable:
           	  <input type="text" name="responsable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Tipo:
                    <input type="checkbox" name="tipo" value="Guía">Guía
  					<input type="checkbox" name="tipo" value="Procedimiento">Procedimiento 
              
                    	
                    	<br>
                    	<br><input type="file" name="archivo">
                   	   <br><br>
                       <input type="submit" value="Envíar" name="subir">
            </form>            
        </div>
    </body>
</html>
