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
    <title>Administrar Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" background="../images/bg.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
</div>
<header>


<br><div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DE USUARIOS</a></li>
			 
	
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
</header>


<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		

		<h2> Administración de usuarios registrados</h2>
		<a href="index_admin.php">Ir a la Gestión Documental </a><br>
        <a href="menu_usuarios.html">Agregar otro usuario </a>
        <div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login");
				$query=mysql_query($sql);

				echo "<table border='1'; class='table table-hover';>";
					echo"<tr class='warning'>";
						echo "<td>ID</td>";
						echo "<td>NOMBRE</td>";
						echo "<td>USUARIOS</td>";
						echo "<td width='100'>Contraseña del administrador</td>";
						echo "<td>Creador</td>";
						echo "<td>Revisror</td>";
						echo "<td>Aprobador</td>";
						echo "<td>Lector</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
						echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";
						echo "<td>$arreglo[7]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='../images/modificar.gif' title='Modificar este usuario' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='../images/borrar.png'  title='Borrar este usuario' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE identificacion=$id";
						$resborrar=mysql_query($sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>

</div>			
</div>
</div>
</div>
</div>
</body>
</html>