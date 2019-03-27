<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo constant('URL')?>public/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Bienvenido a tu PILARES</h1>
            <p class="lead">Hola $ususario. </p>
            <hr class="my-4">
            <p>Nunca olvides tu número personal $folio es indispensable para tus actividades diarias en $nombrePilar.</p>
            <a class="btn btn-primary btn-lg" href="<?php echo constant('URL')?>" role="button">regresar a página principal</a>
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