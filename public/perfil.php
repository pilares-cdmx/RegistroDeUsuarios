<?php
session_start();
if (isset($_SESSION['usuario'])) {
	echo "Has iniciado tu sesion";
}else{
	header("Location: index.php");
	exit();
}
echo "Bienvenido ".$_SESSION['usuario']."<br>
<a href='control/cerrar.php'>SALIR</a>";
?>
