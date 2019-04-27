<?php

// header('Content-Type: application/json');
$fechaNac = array_column($Usuario, 'fechaNacimiento');

$anioActual = date("Y");
    foreach($fechaNac as $value){

        $anioTablaUsuario=substr($value, 0, 4);
    
        if($anioTablaUsuario > $anioActual){
           $value = substr_replace($value, '19', 0, 2);
           
        }
        var_dump($value);
      }
?>