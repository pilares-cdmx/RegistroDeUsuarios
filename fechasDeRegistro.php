<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

    // $q = intval($_GET['q']);
    // header('Content-Type: application/json');
    // $con = mysqli_connect('localhost', 'pilaresDevSergio', '%C2MB10cl1m2t1c0%', 'pilaresDB');
    $con = mysqli_connect('localhost', 'root', 'S2NT2m2r2d0n2...', 'pilaresDB');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

    mysqli_select_db($con, "pilaresDB");

    $sql=
    "SELECT 
        substring(fechaDeUltimaModificacion , 1, 10) AS fechaRegistro, idUsuarios
     FROM Usuario";

$result = mysqli_query($con, $sql);
if($result){
   
    while ($fechaRegistro = mysqli_fetch_array($result)){
        // var_dump($fechaRegistro['folio_oficial']);
        $updateFechaRegistro = $fechaRegistro['fechaRegistro'];
        $idUsuario = $fechaRegistro['idUsuarios'];
        $sqlInsertaFechaRegistro=
            "UPDATE 
            Usuario 
            SET fechaDeRegistro = '$updateFechaRegistro'
            WHERE idUsuarios = '$idUsuario'";
            $resultFolio = mysqli_query($con, $sqlInsertaFechaRegistro);
            echo "ok <br>";

    }
}
?>