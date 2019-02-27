<?php

	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("pilaresdb",$link) or die("<h2>Error de Conexion</h2>");
	


	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	

	
	
	mysql_query("INSERT INTO usuarios (idUsuarios,nombre) VALUES
	('','$nombres')",$link) or die("<h2>Error Guardando los datos</h2>");
	
	
	
	echo  '
	
	
	
	
	
		<script>
			
			location.href="avisodeprivacidad.html";
		</script>
	'


?>




