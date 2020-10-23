<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de archivos</title>
    </head>
<style>
* body {
	background:url(../images/bg.jpg);
	font-family:"BrowalliaUPC", Gadget, sans-serif;
	
	}

table {
  background:#EEE; 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 

}

h6 {
margin: 10px;
}

.myButton:hover {
	background-color:#6c7c7c;
}
.myButton:active {
	position:relative;
	top:1px;
}
	
    </style>
    <body>
       <form>
    		<center><table width="96%">
            <tr>
                <th width="157">TÍTULO</th>
                <th width="96">VERSIÓN</th>
                <th width="108">FECHA</th>
                <th width="432">DESCRIPCIÓN</th>
                <th width="116">TIPO</th>
                <th width="140">RESPONSABLE</th>
                <th width="136">ARCHIVO</th>
             
                
             
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos ORDER BY fecha DESC";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['version']; ?></td>
                <td><?php echo $datos['fecha']; ?></td>
                <td><font site="1px"><?php echo $datos['descripcion']; ?></td>
               	<td><?php echo $datos['tipo']; ?></td>
                <td><?php echo $datos['responsable']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['archivo']; ?></a></td>
               
                 
            </tr>
                
          <?php  } ?>
            
        </table>
    </form>
    </body>
</html>
