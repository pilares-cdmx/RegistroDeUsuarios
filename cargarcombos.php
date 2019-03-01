<?php
	include('class.consultas.php');
	$bandera = $_GET["bandera"];
	$filtro = $_GET["filtro"];
	$Json  = new Json;
	if($bandera==1){
		$Pais   = $Json->ComboPais();
		echo  json_encode($Pais);
	}
	if($bandera==2){
		$Estados      = $Json->ComboEstados($filtro);
		echo  json_encode($Estados);
	}
	if($bandera==3){
		$municipios      = $Json->ComboMunicipios($filtro);
		echo  json_encode($municipios);
	}
	if($bandera==4){
		$localidad      = $Json->ComboLocalidad($filtro);
		echo  json_encode($localidad);
	}
<<<<<<< HEAD
	
	
?>  
=======
?>
>>>>>>> 008118508c034224830af3b5c056fea0c22181e6
