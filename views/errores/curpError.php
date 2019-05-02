<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
    if (isset($_SESSION['nombreUsuarioNuevo'])) {
        $nombre = $_SESSION['nombreUsuarioNuevo'];
        $folio = $_SESSION['folioUsuarioNuevo'];
        $nombrePilar = $_SESSION['pilarUsuarioNuevo'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo constant('URL')?>public/bootstrap/css/bootstrap.css">
    <title>CURP Error</title>
</head>
<body>
 <br>
    <div class="container">
        <div class="jumbotron mt-5">
            <div class="mx-auto text-center">
                <h1 class="display-4 mx">El CURP ya esta registrado </h1>
            </div>

            <p class="lead">Hola, detectamos un problema</p>
            <hr class="my-4">
            <p>El CURP  que  ingresaste ya  se encuentra en la base de datos, acércate con el LCP responsable para  que valide los  datos de usuario</p>
            <div class="text-center">

                <a class="btn btn-primary btn-lg center" href="<?php echo constant('URL')?>Usuario/cerrarSesion" role="button">Terminar </a>
                <a class="btn btn-success btn-lg" href="<?php echo constant('URL')?>Usuario/avisoPrivacidad" role="button">Agregar nuevo registro</a>
            </div>

        </div>

    </div>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?php echo constant('URL')?>public/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo constant('URL')?>public/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo constant('URL')?>public/js/bootstrap.min.js"></script>
</body>
</html>
