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
    <title>Gestión Documental</title>


    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

 </head>
 
<font size=2><body  background="images/fondo_login.jpg"> 
<?php

include("../include/menu1.php");
include("../include/arbol1.php");


?>

</body></font>

</html>
