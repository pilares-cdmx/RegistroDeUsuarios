
<?php
class Control extends Controller{
	public function __construct(){
		parent::__construct();
	}
	public function validar(){
		if (isset($_POST['login'])) {
		//VARIABLES DEL USUARIO
			$usuario = $_POST['txtusuario'];
			$pass = $_POST['txtpass'];
			if($this->model->validar($usuario,$pass)){
				session_start();
				$array = $this->model->validar($usuario,$pass);
				foreach ($array as $row) {
				    $_SESSION['usuario']= $row->usuario ;
				}
				//$this->view->render('formulario/index');
				header('Location:'.constant('URL').'formulario');
			}else{
				$this->view->render('principal/index');
			}
		//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
		if (empty($usuario) | empty($pass)) 
		{
			$this->view->render('principal/index');
		}
	}
}
}
?>