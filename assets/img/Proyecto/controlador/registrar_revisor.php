<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Usuarios nuevos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

  </head>
<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>
    <p>Nuevo revisor</p>
    <p><a href="menu_usuarios.html" style="font-size:12px"> Volver </a></b></legend>
    </p>
    <div class="form-group">
      <label style="font-size: 14pt"><b>N° IDENTIFICACIÓN</b></label>
      <input type="text" name="id" class="form-control" placeholder="Ingresa tu identificación" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #282424;"><b>INGRESE SU NOMBRE</b></label>
      <input type="text" name="nombre" class="form-control"  required placeholder="Nombre"/>
    </div>
    
    <div class="form-group">
      <label style="font-size: 14pt; color: #282424;"><b>NOMBRE DE USUARIO</b></label>
      <input type="text" name="user" class="form-control"  placeholder="Nombre de Usuario" />
    </div>

  <div class="form-group">
      <label style="font-size: 14pt; color: #282424;"><b>INGRESE CONTRASEÑA</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>CONFIRMAR CONTRASEÑA</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
    
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
	<a href="index.php">Iniciar Sesión</a>
  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro_revisor.php");
		}
	?>
	
	  </body>
</html>
