
<?php
/*
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
*/
require_once 'config/global.php';
require_once 'libs/ControladorBase.php';
require_once 'libs/ControladorFrontal.func.php';

if (isset($_GET["controller"])) {
	$controllerObj = cragarControlador($_GET["controller"]);
}else{
	$controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
}
lanzarAccion($controllerObj);

/**
 * [Primer archivo que lee el navegador,
 * 	importa las clases que proveen las funcionalidades de la aplicación]
 */
/*
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
	require_once 'libs/dbcontroller.php';
	require_once 'libs/controller.php';
	require_once 'libs/view.php';
	require_once 'libs/model.php';
 	require_once 'libs/app.php';
	require_once 'config/config.php';
	 
	 $app = new App();
*/	 

?>