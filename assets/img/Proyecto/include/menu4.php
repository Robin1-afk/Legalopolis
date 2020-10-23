<!DOCTYPE html><head>

<body>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
		  <li class=""><a href="lector.php">Principal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
<?php
include('connect_db.php');
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
<?php
$sql = "SELECT * FROM tbl_documentos WHERE para='".$_SESSION['user']."' and leido IS NULL" ;
$res = mysql_query($sql, $link) or die(mysql_error());
$tot = mysql_num_rows($res);
?>
<li class=""><a href="../subir/revisar.php" title="Nuevos documentos"><strong>Mensajes (<?php echo $tot?>)</strong></a><li>
        
            </ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido -Señor(a)- Lector <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  	<li><a href="desconectar.php"> Cerrar Cesión </a></li>			
        

        </ul>
      </div>
	</div>
  </div>
</div>
</body>
</html>



