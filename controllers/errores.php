<?php
/**
 * [Errores description]
 */
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
