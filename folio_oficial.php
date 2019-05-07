<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

    // $q = intval($_GET['q']);
    // header('Content-Type: application/json');
    // $con = mysqli_connect('localhost', 'pilaresDevSergio', '%C2MB10cl1m2t1c0%', 'pilaresDB');
    $con = mysqli_connect('localhost', 'root', '', 'pilaresDB');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

    mysqli_select_db($con, "pilaresDB");
    // SELECT U1.idUsuarios, U2.Pilares_idPilares, U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, CONCAT(U2.Pilares_idPilares, U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, SUBSTRING(U1.curp, 14, 5)) AS folio_oficial, U1.curp FROM Usuario U1, UsuariosPorPilar U2 WHERE U1.idUsuarios = U2.Usuario_idUsuarios limit 10;
    $sql=
    "SELECT 
        U1.idUsuarios, 
        U2.Pilares_idPilares, 
        U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, 
        CONCAT(U2.Pilares_idPilares, U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, 
        SUBSTRING(U1.curp, 14, 4)) AS folio_oficial, 
        U1.curp 
     FROM Usuario U1, UsuariosPorPilar U2 
     WHERE U1.idUsuarios = U2.Usuario_idUsuarios";

    $result = mysqli_query($con, $sql);
    if($result){
        // echo "vas por buen camino";
        // $sqlInsertaNuevoFolio="";

        // $resultFolio = mysqli_query($con, $sql);
       
        // if($resultFolio){
            // while ($nuevoFolio = mysqli_fetch_array($result)){
            //     // print json_encode($nuevoFolio['folio_oficial']);
            //     $folio = $nuevoFolio['folio_oficial'];
                // $sqlInsertaFolioOficial=
                // "UPDATE Usuario SET folio_oficial = '$folio'";
                // $resultFolio = mysqli_query($con, $sqlInsertaFolioOficial);
            // }
        // }
        
        // $nuevoFolio = mysqli_fetch_array($result);
        while ($nuevoFolio = mysqli_fetch_array($result)){
            // var_dump($nuevoFolio['folio_oficial']);
            $idFolioNuevo = $nuevoFolio['folio_oficial'];
            $idUsuario = $nuevoFolio['idUsuarios'];
            $sqlInsertaFolioOficial=
                "UPDATE 
                Usuario 
                SET folio = '$idFolioNuevo'
                WHERE idUsuarios = '$idUsuario'";
                $resultFolio = mysqli_query($con, $sqlInsertaFolioOficial);
                echo "ok";

        }
    }
    // else{
    //     echo "No se logró realizar la consulta";
    // }


?>