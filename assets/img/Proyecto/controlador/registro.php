<?php

	$id=$_POST['id'];
	$name=$_POST['nombre'];
	$usuario=$_POST['user'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	
	
	

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM  login WHERE email='$usuario'");
	$check_user=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_user>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO login VALUES ('$id','$name','$usuario',' ','$pass',' ',' ',' ')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}


 ?>