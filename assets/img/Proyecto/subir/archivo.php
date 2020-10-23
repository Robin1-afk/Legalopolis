<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vistas</title>
    </head>
    <CENTER><body>
       <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select * from tbl_documentos where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="archivos/<?php echo $datos['archivo']; ?>" width="1000" height="1000"></iframe>
                
                <?php } } ?>
    </body>
</html>
