<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "admin" ) {
require "Configuracion/crud.php";
$id=$_POST['id'];
$instancia = $_POST['instancia'];
$thime=time();
date_default_timezone_set('america/bogota');
        $fecha=date("Y-m-d-H:i:s",$thime);	

$dato = "Actualizacion en instancia de proceso";

$sql = " UPDATE documentacion  SET  instancia_proceso='$instancia', fecha_ultima_actualizacion='$fecha', detalle_ultima_actualizacion='$dato' WHERE id='$id' ";

$verificar = $conexion->query($sql);
if($verificar){ 

$sql = "SELECT * FROM  documentacion WHERE id = $id";
$verificar = $conexion->query($sql);
while($raw = $verificar->fetch_array(MYSQLI_ASSOC)){
    $correo = $raw['correo'];
    $nombre = $raw['nombre_usuario'];

}

//correo


require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;    
                                                           // Enable SMTP authentication
    $mail->Username = 'robincastellanosperez@gmail.com';       // SMTP username
    $mail->Password = 'fulaster123';                      // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('robincastellanosperez@gmail.com', 'Legalopolis');
    $mail->addAddress("$correo" , "$nombre");     // Add a recipient

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nueva actualizacion';
    $mail->Body    = "estimado/a $nombre su estado de instancia de proceso a sido actualizado </b>";
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'exito';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 

 //  echo "<script> alert('La instancia del proceso a sido cambiada satisfatoriamente') </script>";
   header('location: procesos.php');
   
}else {
    echo "hubo algun error ";
}



  


/*
//correo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;    
                                                           // Enable SMTP authentication
    $mail->Username = 'robincastellanosperez@gmail.com';       // SMTP username
    $mail->Password = 'fulaster123';                      // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('robincastellanosperez@gmail.com', 'Legalopolis');
    $mail->addAddress("$correo" , "$nombre");     // Add a recipient

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nueva actualizacion';
    $mail->Body    = "estimado/a $nombre su estado de instancia de proceso a sido actualizado </b>";
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'exito';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


*/
}else{
    header("location:  index.php");
}
?>