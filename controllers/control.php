
<?php
/**
* Clase Control contiene la lógica para la validación de credenciales
* en los ususarios con acceso al formulario de registro
* No tiene asociada una vista porque el ingreso de credenciales se hace
* desde el index de principal
**/
class Control extends Controller{
	/**
	 * [__construct description]
	 */
	public function __construct(){
		parent::__construct();
		echo "soy control";
	}
	/**
	 * [validar description]
	 * @return [type] [description]
	 */
	public function validar(){
		echo " soy validar";
	/*	
		if (isset($_POST['login'])) {
		//VARIABLES DEL USUARIO
			$usuario = $_POST['txtusuario'];
			$pass = $_POST['txtpass'];
			if($this->model->validar($usuario,$pass)){
				session_start();
				$array = $this->model->validar($usuario,$pass);
				foreach ($array as $row) {
				    //$_SESSION['usuario']= $row->usuario ;
				}
				$this->view->render('formulario/mascara');
				//header('Location:'.constant('URL').'formulario');
			}else{
				$this->view->render('formulario/login');
			}
		//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
		if (empty($usuario) | empty($pass))
		{
			$this->view->render('formulario/login');
		}
	}
*/
}
}
?>
