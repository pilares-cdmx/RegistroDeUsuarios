<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
// header('Content-Type: application/json');
$fechaNac = array_column($Usuario, 'fechaNacimiento');

$anioActual = date("Y");
    foreach($fechaNac as $value){

        $anioTablaUsuario=substr($value, 0, 4);
    
        if($anioTablaUsuario > $anioActual){
           $value = substr_replace($value, '19', 0, 2);
           
        }
        // var_dump($value);
      }
?>