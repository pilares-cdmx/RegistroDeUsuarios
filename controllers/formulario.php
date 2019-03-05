<?php
class Formulario extends Controller{
	public function __construct(){
		parent::__construct();
	}
	function render(){
		$this->view->alcaldias =$this->listarAlcaldias();
		$this->view->render('formulario/index');
	}
	function listarAlcaldias(){
		$alcaldias=$this->model->getAlcaldias();
		return $alcaldias;
	}
	
	function getPilares(){
		$id = $_GET['id'];
		$country = $this->model->getPilaresById($id);
		$data=$country;
		echo json_encode($data);
	}
	function getColonias(){
		$id = $_GET['id'];
		$country = $this->model->getColoniaPorId($id);
		$data=$country;
		echo json_encode($data);
	}
	function getMunicipios(){
		$id = $_GET['id'];
		$country = $this->model->getMunicipiosPorId($id);
		$data=$country;
		echo json_encode($data);
	}
	function registrarUsuario(){
		var_dump($_POST);
		
		$nombre=(!is_null($_POST['nombreuser'])) ? $_POST['nombreuser'] : "Sin Datos";
		$apellidopat=(!is_null($_POST['apellidopat'])) ? $_POST['apellidopat'] : "Sin Datos";
		$apellidomat=(!is_null($_POST['apellidomat'])) ? $_POST['apellidomat'] : "Sin Datos";
		$curp=(!is_null($_POST['curp'])) ? $_POST['curp'] : "Sin Datos";
		$grupoet=(!is_null($_POST['grupoet'])) ? $_POST['grupoet'] : "Sin Datos";
		$municipio=(!is_null($_POST['municipio'])) ? $_POST['municipio'] : "Sin Datos";
		$callenumero=(!is_null($_POST['callenumero'])) ? $_POST['callenumero'] : "Sin Datos";
		$numre=(!is_null($_POST['numre'])) ? $_POST['numre'] : 0;
		$t1=(!is_null($_POST['t1'])) ? $_POST['t1'] :0;
		$t2=(!is_null($_POST['t2'])) ? $_POST['t2'] : 0;
		$email=(!is_null($_POST['email'])) ? $_POST['email'] : "Sin Datos";
		$estudias[]=(!is_null($_POST['estudias[]'])) ? $_POST['estudias[]'] : "Sin Datos";
		$grado=(!is_null($_POST['grado'])) ? $_POST['grado'] : "Sin Datos";
		$ocupacionact=(!is_null($_POST['ocupacionact'])) ? $_POST['ocupacionact'] : "Sin Datos";
		$opedu=(!is_null($_POST['opedu'])) ? $_POST['opedu'] : "Sin Datos";
		$state_id=(!is_null($_POST['state_id'])) ? $_POST['state_id'] : "Sin Datos";
			echo $t2;


	}
}
?>