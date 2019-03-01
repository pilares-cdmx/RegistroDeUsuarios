<?php
	//conexion con la base de datos y el servidor
<<<<<<< HEAD
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("pilares",$link) or die("<h2>Error de Conexion</h2>");


=======
$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
$db = mysql_select_db("pilaresdb",$link) or die("<h2>Error de Conexion</h2>");
>>>>>>> 008118508c034224830af3b5c056fea0c22181e6
$correo = $_POST['email'];
$telcasa = $_POST['t1'];
$telce = $_POST['t2'];
mysql_query("INSERT INTO contacto VALUES
	('','$correo','$telcasa','$telce')") or die("<h2>Error Guardando los datos</h2>");

//direccion


$calle = $_POST['callenumero'];
$codigopostal = $_POST['municipio'];



mysql_query("INSERT INTO direccion  VALUES
	('','$calle','$codigopostal')") or die("<h2>Error Guardando los datos</h2>");

<<<<<<< HEAD



//USUARIOS

$nombres = $_POST['nombreuser'];
$apellidoPaterno = $_POST['apellidopat'];
$apellidoMaterno = $_POST['apellidomat'];
$CURP = $_POST['curp'];
$grupoEtnico = $_POST['grupoet'];
$tiempoResidencia = $_POST['numre'];
$gradoEstudios = $_POST['grado'];
$estudias = $_POST['estudias1'];
$ocupacionActual = $_POST['ocupacionact'];


mysql_query("INSERT INTO usuarios  VALUES
('','$nombres','$apellidoPaterno','$apellidoMaterno','$CURP','$grupoEtnico','$tiempoResidencia','$gradoEstudios','$estudias','$ocupacionActual','','')") or die("<h2>Error Guardando los datos</h2>");


=======
/

>>>>>>> 008118508c034224830af3b5c056fea0c22181e6
echo  '

		<script>

			location.href="avisodeprivacidad.html";
		</script>
	'
<<<<<<< HEAD




?>
=======
?>
>>>>>>> 008118508c034224830af3b5c056fea0c22181e6
