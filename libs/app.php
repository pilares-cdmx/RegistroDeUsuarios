
<?php
/**
* Clase App se enfoca en administrar todos los controladores, se hace el mapeo
* a partir de la URL
**/
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
require_once 'controllers/errores.php';
/**
 * App esta clase contiene la lógica  sobre el patron de diseño y los mecanismos de comunicación
 * de sus diferentes capas: Controladores, vistas y modelos
 */
class App{
	/**
	 * El atributo de esta clase es la URL y apartir de ella construye un arreglo de elementos
	 * donde el primer elemento es el controlador y el segundo un metodo de ese controlador
	 */
	function __construct(){
		/** @var [type] [description] */
		$url=isset($_GET['url']) ? $_GET['url']: null;
		$url=rtrim($url,'/');
		$url=explode('/',$url);
		/*cuando se ingresa sin definir controlador*/
	 if(empty($url[0])){
		 /** @var string [ruta del controlador principal] */
	 	$archivoController='controllers/principal.php';
	 	require_once $archivoController;
		/**Inicializando el controlador*/
	 	$controller= new Principal();
	 	//$controller->loadModel(principal);
	 	$controller->render();
	 	return false;
	 }
		/*crear instancia del controlador que se le proporione*/
		$archivoController='controllers/'.$url[0].'.php';
		if(file_exists($archivoController)){
			require_once $archivoController;
			$controller= new $url[0];
			$controller->loadModel($url[0]);
			//número de elementos del arreglo
			$parametros = sizeof($url);
			/*verificar que existe el método*/
			if ($parametros>1) {
				if ($parametros>2) {
					$parametro_array = [];
					for ($i=2; $i <$parametros ; $i++) {
						array_push($parametro_array,$url[$i]);
					}
					$controller->{$url[1]}($parametro_array);
				}else{
					$controller->{$url[1]}();
				}
			}
			else{
				$controller->render();
			}
		}else{
			$controller= new Errores();
			$controller->render();
		}
	}
}
?>
