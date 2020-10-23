<?php
header('Content-Type: text/html; charset=ISO-8859-1'); 
session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];
	
	
	
	
	$sql2=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['identificacion']=$f2['identificacion'];
			$_SESSION['user']=$f2['user'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){ 
		if($pass==$f['creador']){
			$_SESSION['identificacion']=$f['identificacion'];
			$_SESSION['user']=$f['user'];
			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA.")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR.")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

$sql=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){ 
		if($pass==$f['lector']){
			$_SESSION['identificacion']=$f['identificacion'];
			$_SESSION['user']=$f['user'];
			header("Location: lector.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA.")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR.")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}
	
$sql=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){ 
		if($pass==$f['revisor']){
			$_SESSION['identificacion']=$f['identificacion'];
			$_SESSION['user']=$f['user'];
			header("Location: revisor.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA.")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR.")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}
	
	$sql=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){ 
		if($pass==$f['aprobador']){
			$_SESSION['identificacion']=$f['identificacion'];
			$_SESSION['user']=$f['user'];
			header("Location: aprobador.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA.")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR.")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

include("../subir/index.php");
include("../subir/doc_creador.php");
	
?>