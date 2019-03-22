<?php
	/**
	 * [Principal description]
	 */
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);
	class Principal extends Controller{

		function __construct(){
			parent::__construct();

		}
		/**
		 * [render description]
		 */
		function render(){
		$this->view->render('formulario/login');	
	//	$this->view->render('principal/index');
	 }
	}
?>
