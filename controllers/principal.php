<?php
	/**
	 * [Principal description]
	 */
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
