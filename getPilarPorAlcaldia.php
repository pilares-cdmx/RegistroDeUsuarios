
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$q = intval($_GET['q']);


$con = mysqli_connect('localhost', 'root', 'C2B1N1T2102$', 'pilaresDB');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "pilaresDB");
mysqli_query($con, "SET NAMES 'utf8mb4'");
$sql="SELECT * FROM Pilares WHERE Direccion_Colonias_Alcaldias_idAlcaldiasZonas = '".$q."' ORDER BY nombre";
$result = mysqli_query($con, $sql);
/*
echo "<table>
<tr>
<th>idColonia</th>
<th>nombre</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
*/
while ($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row['idPilares'] . ">" . $row['nombre'] . "</option>";  
}

mysqli_close($con);
?>
</body>
</html> 