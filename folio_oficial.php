<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

    // $q = intval($_GET['q']);
    // header('Content-Type: application/json');
    $con = mysqli_connect('localhost', 'francisco', 'tu_contrasena', 'pilaresDB');
    // $con = mysqli_connect('localhost', 'root', '', 'pilaresDB');
    // $con = mysqli_connect('localhost', 'root', 'S2NT2m2r2d0n2...', 'pilaresDB');

        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

    mysqli_select_db($con, "pilaresDB");
    // SELECT U1.idUsuarios, U2.Pilares_idPilares, U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, CONCAT(U2.Pilares_idPilares, U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, SUBSTRING(U1.curp, 14, 5)) AS folio_oficial, U1.curp FROM Usuario U1, UsuariosPorPilar U2 WHERE U1.idUsuarios = U2.Usuario_idUsuarios limit 10;
    // $sql=
    // "SELECT 
    //     U1.idUsuarios,
    //     U1.folio, 
    //     U2.Pilares_idPilares, 
    //     U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, 
    //     CONCAT(U2.Pilares_idPilares, U2.Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas, 
    //     SUBSTRING(U1.curp, 15, 6)) AS folio_oficial, 
    //     U1.curp 
    //  FROM Usuario U1, UsuariosPorPilar U2 
    //  WHERE U1.idUsuarios = U2.Usuario_idUsuarios";

    // $result = mysqli_query($con, $sql);
    // if($result){
         
    //     while ($nuevoFolio = mysqli_fetch_array($result)){
    //         // var_dump($nuevoFolio['folio_oficial']);
    //         $idFolioNuevo = $nuevoFolio['folio_oficial'];
    //         $folioViejo = $nuevoFolio['folio'];
    //         $idUsuario = $nuevoFolio['idUsuarios'];
          
    //             $sqlInsertaFolioOficial=
    //             "UPDATE 
    //             Usuario 
    //             SET folio = '$idFolioNuevo'
    //             WHERE idUsuarios = '$idUsuario'";
    //             $resultFolio = mysqli_query($con, $sqlInsertaFolioOficial);
    //             echo "ok <br>";      

    //     }

    // }
 
    $sqlFoliosRepetidos = "SELECT folio, idUsuarios  
                    FROM Usuario 
                    WHERE folio IN (SELECT folio FROM Usuario GROUP BY folio HAVING count(*) >= 2)";


    //  $query = "SELECT folio , idUsuarios FROM Usuario";
      $resultFolios= mysqli_query($con, $sqlFoliosRepetidos);
      while ($row = mysqli_fetch_array($resultFolios)){
          $random = rand(0,9);
          $folio = $row['folio'];
          $idUsuario = $row['idUsuarios'];
          $noRepetido = $folio.$random;
        //   $query2="SELECT * FROM Usuario WHERE folio = '$folio'";
        //   $tmp= mysqli_query($con, $query2);
        //   if ($tmp) {
                    //   $usuario = mysqli_fetch_assoc($tmp);
                      
                      $sqlInsertaFolioNoRepetido="UPDATE 
                      Usuario 
                      SET folio = '$noRepetido'
                      WHERE idUsuarios = '$idUsuario'";
                      $resultFolio = mysqli_query($con, $sqlInsertaFolioNoRepetido);
                    //   $incremental = $incremental++;
                    //   var_dump($incremental);
                      echo "ok <br>"; 
                      
                  
        // }
      }
    //   $folioTmp = $pilarId.$IdAlcaldiaPilar.$idCurp;
    //   $query="SELECT * FROM Usuario WHERE folio = '$folioTmp'";
    //   $tmp = $this->db->query($query);
    //       if ($usuario = mysqli_fetch_assoc($tmp)) {
    //           $incremental += $incremental++;
    //           $this->folio = $folioTmp.$incremental;
    //           // $incremental += $incremental++;
    //       }else {
    //           $this->folio =  $folioTmp;
    //       }

    //   while ($row = mysqli_fetch_array($resultFoliosRepetidos)){
    //       $incremental = rand(0,9);
    //       $folio = $row['folio'];
    //       $idUsuario = $row['idUsuarios'];

    //       $sqlInsertaFolioNoRepetido=
    //                   "UPDATE 
    //                   Usuario 
    //                   SET folio = '$folio'.'$incremental'
    //                   WHERE idUsuarios = '$idUsuario'";
    //                   $resultFolio = mysqli_query($con, $sqlInsertaFolioNoRepetido);
    //                   echo "ok <br>"; 
    //       $incremental = rand(0,9);             
    //   }
?>
