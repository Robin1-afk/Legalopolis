<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="es" >
  <head>
    <meta charset="utf-8">
    <title>Gestión Documental</title>


    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

 </head>
<font size=2><body  background="../images/fondo_login.jpg"> 
<?php

include("../include/menu4.php");
include("../include/arbol4.php");

?>


</body></font>

</html>

