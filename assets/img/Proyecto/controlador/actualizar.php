<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Editor De Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<br><body data-offset="40" background="../images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
</div>
</header>


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div>
	</div>
  </div>
</div>


<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		

		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE identificacion=$id";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$email=$row[2];
				$pasadmin=$row[3];
				$creador=$row[4];
				$revisor=$row[5];
				$aprobador=$row[6];
				$lector=$row[7];
		    	
				
		    }

		?>

		<form action="ejecutaactualizar.php" method="post">
				Identificación<br><input type="text" name="id" value= "<?php echo $id?>" readonly><br>
				Nombre<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Nombre de usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				Clave administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
    			Clave creador<br> <input type="text" name="creador" value="<?php echo $creador?>"><br>
                Clave revisor<br> <input type="text" name="revisor" value="<?php echo $revisor?>"><br>
                Clave aprobador<br> <input type="text" name="aprobador" value="<?php echo $aprobador?>"><br>
                Clave lector<br> <input type="text" name="lector" value="<?php echo $lector?>"><br>
		  <input type="submit" value="Guardar" class="btn btn-success btn-primary">
		  </form>

		<div class="span8">
		
		</div>	
		</div>	
		<br/>

		
		
		</div>
  </body>
</html>


