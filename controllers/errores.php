<?php
/**
 * [Errores description]
 */
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
	class Errores extends Controller{
		function __construct(){
			parent::__construct();

		}
		/**
		 * [render description]
		 * @return [type] [description]
		 */
		function render(){
			$this->view->mensaje="Hubo un error en la solicitud";
			$this->view->render('errores/index');
		}
	}
?>
