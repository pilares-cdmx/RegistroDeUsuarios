
<?php
 ini_set('display_startup_errors', 1);
 ini_set('display_errors', 1);
 error_reporting(-1);
 require_once 'config/db.php';
 $q = intval($_GET['q']);
               
?>
<!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>

        <?php
       
            $con = mysqli_connect('localhost', 'root', 'S2NT2m2r2d0n2...', 'pilaresDB');
            // $con = mysqli_connect('localhost', 'root', '', 'pilaresDB');
            // $con = mysqli_connect('localhost', 'francisco', 'tu_contrasena', 'pilaresDB');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            mysqli_select_db($con, "pilaresDB");
            mysqli_query($con, "SET NAMES 'utf8mb4'");

            $sql="SELECT * FROM Colonias WHERE Alcaldias_idAlcaldiasZonas = '".$q."' ORDER BY nombre";
            // $sql="SELECT * FROM Colonias WHERE Alcaldias_idAlcaldiasZonas = '$q' ORDER BY nombre";
            $result = mysqli_query($con, $sql);
            // $result = $this->db->query($sql);
                
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=" . $row['idColonia'] . ">" . $row['nombre'] . "</option>";
                }

            mysqli_close($con);
        ?>
        </body>
    </html>
