<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gestión Documental</title>


    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

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
			margin: -0.5em 0 0 -44px; /* 15px */
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
  height: 780px;
  
  background-color: #fff;
  margin: -20px 

}

</style> 
<font size=2><body  background="../images/fondo_login.jpg"> 

<aside id="fondo">
<br><br><form id="form1" >
<ol class="tree">
	
		<li>
		<label for="folder2">DOCUMENTOS EXTERNOS</label> <input type="checkbox" id="folder2" />
			<ol>
				<li class="file"><a href="">Documentos</a></li>
				<li>
					<label for="subfolder2">Todos lo documentos</label> <input type="checkbox" id="subfolder2" /> 
					<ol>
						<li class="file"><a href="../SUBIR/INDEX.PHP">Documentos...</a></li>
						<li class="file"><a href="">Subfile 2</a></li>
						<li class="file"><a href="">Subfile 3</a></li>
						<li class="file"><a href="">Subfile 4</a></li>
						<li class="file"><a href="">Subfile 5</a></li>
						<li class="file"><a href="">Subfile 6</a></li>
					</ol>
				</li>
			</ol>
		</li>
		<li>
			<label for="folder3">INFORMACIONES</label> <input type="checkbox" id="folder3" /> 
			<ol>
				<li class="file"><a href="">File 1</a></li>
				<li>
					<label for="subfolder3">Subfolder 1</label> <input type="checkbox" id="subfolder3" /> 
					<ol>
						<li class="file"><a href="">Subfile 1</a></li>
						<li class="file"><a href="">Subfile 2</a></li>
						<li class="file"><a href="">Subfile 3</a></li>
						<li class="file"><a href="">Subfile 4</a></li>
						<li class="file"><a href="">Subfile 5</a></li>
						<li class="file"><a href="">Subfile 6</a></li>
					</ol>
				</li>
			</ol>
		</li>
		<li>
			<label for="folder4">MANUELAES</label> <input type="checkbox" id="folder4" /> 
			<ol>
				<li class="file"><a href="">File 1</a></li>
				<li>
					<label for="subfolder4">Subfolder 1</label> <input type="checkbox" id="subfolder4" /> 
					<ol>
						<li class="file"><a href="">Subfile 1</a></li>
						<li class="file"><a href="">Subfile 2</a></li>
						<li class="file"><a href="">Subfile 3</a></li>
						<li class="file"><a href="">Subfile 4</a></li>
						<li class="file"><a href="">Subfile 5</a></li>
						<li class="file"><a href="">Subfile 6</a></li>
					</ol>
				</li>
			</ol>
		</li>
		<li>
			<label for="folder5">PROCEDIMIENTOS</label> <input type="checkbox" id="folder5" /> 
			<ol>
				<li class="file"><a href="">File 1</a></li>
				<li>
					<label for="subfolder5">Subfolder 1</label> <input type="checkbox" id="subfolder5" /> 
					<ol>
						<li class="file"><a href="">Subfile 1</a></li>
						<li class="file"><a href="">Subfile 2</a></li>
						<li class="file"><a href="">Subfile 3</a></li>
						<li class="file"><a href="">Subfile 4</a></li>
						<li class="file"><a href="">Subfile 5</a></li>
						<li class="file"><a href="">Subfile 6</a></li>
					</ol>
				</li>
			</ol>
		</li>
	</ol>
</form>
</aside></body></font>

</html>

