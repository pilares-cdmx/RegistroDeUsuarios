<?php
	class Errores extends Controller{
		function __construct(){
			parent::__construct();
			
		}
		function render(){
			$this->view->mensaje="Hubo un error en la solicitud";
			$this->view->render('errores/index');
		}
	}
?>