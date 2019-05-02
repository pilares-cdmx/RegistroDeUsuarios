<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `pilaresDB`
//

// `pilaresDB`.`Usuario`

$con = mysqli_connect('localhost', 'francisco', 'tu_contrasena', 'pilaresDB');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
mysqli_select_db($con, "pilaresDB");

$fechaNac = array_column($Usuario, 'fechaNacimiento', 'idUsuarios');

$anioActual = date("Y-m-d");
echo $anioActual;
    foreach($fechaNac as $key => $value){

        $anioTablaUsuario=substr($value, 0, 4);
    
        if($anioTablaUsuario > $anioActual){
           $value = substr_replace($value, '19', 0, 2);
           $fechaCorregida = array($key => $value);
           $fechaNac = array_replace($fechaCorregida);
          //  var_dump($fechaNac);
          $sql = 
          "UPDATE
            Usuario SET fechaNacimiento = '$value'
            WHERE idUsuarios = '$key'";
            $result = mysqli_query($con, $sql);
            // echo 'ok';
            // echo$sql;
           
        }
        // var_dump($key => $value);
      }

      // var_dump($fechaNac);
?>