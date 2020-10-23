<?php

$conexion = new mysqli('localhost', 'root' , '' , 'legalopolis');

if($conexion->connect_errno){

    die('Error al conectar');
}else
{
    //die('Conexion exitosa');
}


?>