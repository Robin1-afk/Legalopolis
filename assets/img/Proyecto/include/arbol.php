<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gestión Documental</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

<script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
<script>
$ (document).ready(function(e) {

$("#pulsar").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/lista_lector.php");

});

});

</script>

<script>

$ (document).ready(function(e) {

$("#pulsar2").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/index.php");

});

});

</script>

<script>

$ (document).ready(function(e) {

$("#pulsar3").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../include/permisos2.php");

});

});

</script>

<script>

$ (document).ready(function(e) {

$("#pulsar4").click(function(e) {
 
 e.preventDefault();
 
 $("#externo").attr("src","../subir/doc_creador.php");

});

});

</script>
 </head>
 <style>
body {
position: relative;
 top:  -22px; 
 left: 0px;
}
form {
	font-size: 12px; 
	position: relative;
 top:  -16px; 
 left: -10px;
	
}

html { font-size: 50%; /* IE hack */ }
body { font-size: 1em; /* Sets base font size to 16px */ }
table { font-size: 100%; /* IE hack */ }
input, select, textarea, th, td { font-size: 1em; }
	
/* CSS Tree menu styles */
ol.tree
{
	padding: 0 0 0 30px;
	width: 300px;
}
	li 
	{ 
		position: relative; 
		margin-left: -15px;
		list-style: none;
	}
	li.file
	{
		margin-left: -1px !important;
	}
	
	
		
	li input
	{
		position: absolute;
		left: 0;
		margin-left: 0;
		opacity: 0;
		z-index: 2;
		cursor: pointer;
		height: 1em;
		width: 1em;
		top: 0;
	}
		li input + ol
		{
			background: url(toggle-small-expand.png) 40px 0 no-repeat;
			margin: -0.7em 0 0 -44px; /* 15px */
			height: 1em;
			position: relative;
 			top:  -14px; 
 			left: 0px;
		}
		li input + ol > li { display: none; margin-left: -14px !important; padding-left: 1px; }
	li label
	{
		background: url(folder-horizontal.png) 15px 1px no-repeat;
		cursor: pointer;
		padding-left: 37px;
	}

	li input:checked + ol
	{
		background: url(toggle-small.png) 40px 5px no-repeat;
		margin: -1.25em 0 0 -44px; /* 20px */
		padding: 1.563em 0 0 80px;
		height: auto;
	}
		li input:checked + ol > li { display: block; margin: 0 0 0.125em;  /* 2px */}
		li input:checked + ol > li:last-child { margin: 0 0 0.063em; /* 1px */ }
#fondo {


  width: 260px;
  height: 795px;
  position:absolute; z-index:1;
  background-color: #fff;
  margin: -20px 

}

#fondo2 {


  width: 1355px;
  height: 780px;
  position:absolute; z-index:0;
  top:64px;
 left:240px;

}





</style> 
<font size=2><body  background="../images/fondo_login.jpg"> 
<aside id="fondo">
<br><br><form id="form1" >
<ol class="tree">
	
		<li>
		<label for="folder2">DOCUMENTOS</label> <input type="checkbox" id="folder2" />
			
					<ol>
						<li class="file"><a href="" id="pulsar">Todos los documentos</a></li>
					</ol>
                    </li>
		<li>
			<label for="folder3">OPCIONES</label> <input type="checkbox" id="folder3" /> 
			<ol>
				<li class="file"><a href="" id="pulsar2">Agregar nuevo</a></li>
                <li class="file"><a href="" id="pulsar4">Mis documentos subidos</a></li>
                <li class="file"><a href="" id="pulsar3">Mis permisos</a></li>
            </ol>
			</li>
		
        </form>
</aside>
<aside id="fondo2">
<div id="contenedor"><iframe src="" width="1360" height="780" id="externo" frameborder="0"></iframe></div>
</aside>
</body></font>
</html>
