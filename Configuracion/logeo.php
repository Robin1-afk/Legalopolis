<?php

session_start();
require("crud.php");
$username=$_POST['usuario'];
$pass=$_POST['clave'];


//la variable  $conexion viene de crud.php que lo traigo con el require("crud.php");
$sql=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='$username' AND password='$pass' ");
if($row=mysqli_fetch_assoc($sql)){
    if($username==$row['usuario'] && $pass==$row['password']   ){
        
        $_SESSION['id']=$row['id'];
        $_SESSION['usuario']=$row['usuario'];
        $_SESSION['password']=$row['password'];	
        $_SESSION['cedula']=$row['cedula'];	
        $_SESSION['nombre_usuario']=$row['nombre_usuario'];	
        $_SESSION['tipo_usuario']=$row['tipo_usuario'];	
    
        $usuario = $_SESSION['nombre_usuario'];
        if($_SESSION['tipo_usuario'] == "Premium"){
            echo "<script> alert('Bienvenido Abogado ".$usuario."') </script>";
            echo "<script>location.href='../usuario.php'</script>";
        }else if($_SESSION['tipo_usuario'] == "admin"){
            echo "<script> alert('Bienvenido ADMINISTRADOR ".$usuario."') </script>";
            echo "<script>location.href='../main.php'</script>";
        }

    }
    
}
else {
    echo "<script> alert('Contraseña/Usuario incorrecto') </script>";
 echo "<script>location.href='../index.php'</script>";
}
?>
