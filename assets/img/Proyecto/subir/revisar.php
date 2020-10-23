<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de archivos</title>
    </head>
<?php 

include('../controlador/connect_db.php'); 
session_start();

$sql = "SELECT * FROM tbl_documentos WHERE para='".$_SESSION['user']."' and leido IS NULL" ;
$res = mysql_query($sql, $link) or die(mysql_error());
?>
  <a class="" href="../controlador/lector.php">Volver</a>
  <table width="800" align="center" cellpadding="1" cellspacing="1" style="border: 1px solid #000;">
    <tr>
      <td width="127" align="center" valign="top"><strong>Para</strong></td>
      <td width="309" align="center" valign="top"><strong>Leer Documento</strong></td>
      <td width="220" align="center" valign="top"><strong>Responsable</strong></td>
	  <td width="131" align="center" valign="top"><strong>Fecha</strong></td>
    </tr>
    <?php
	$i = 0; 
	while($row = mysql_fetch_assoc($res)){ ?>
    <tr bgcolor="<?php if($row['leido'] == "si") { echo "#FFE8E8"; } else { if($i%2==0) { echo "#FFE7CE"; } else { echo "#FFCAB0"; } } ?>">
      <td align="center" valign="top"><?php echo $row['para']?></td>
      <td align="center" valign="top"><a href="leer.php?id=<?php echo $row['id_documento']?>"><?php echo $row['archivo']?></a></td>
      <td align="center" valign="top"><?php echo $row['responsable']?></td>
	  <td align="center" valign="top"><?php echo $row['fecha']?></td>
    </tr>
<?php $i++; 
} ?>
</table>
</html>