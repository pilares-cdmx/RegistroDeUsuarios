<?php

	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("pilaresdb",$link) or die("<h2>Error de Conexion</h2>");


$correo = $_POST['email'];
$telcasa = $_POST['t1'];
$telce = $_POST['t2'];


mysql_query("INSERT INTO contacto VALUES
	('','$correo','$telcasa','$telce')") or die("<h2>Error Guardando los datos</h2>");




//direccion 




$calle = $_POST['callenumero'];
$codigopostal = $_POST['municipio'];



mysql_query("INSERT INTO direccion  VALUES
	('','$calle','$CodigoPostal_idCodigoPostal')") or die("<h2>Error Guardando los datos</h2>");


/





echo  '
	
		<script>
			
			location.href="avisodeprivacidad.html";
		</script>
	'



?>