<?php
/**
* Clase Fromulario que hereda de controlador
* En esta sección se escribe la logica de las operaciones (validaciones, calculo de datos), necesarias
* para persistir los datos del Registro formulario en una
* base de datos normalizada
**/
class Formulario extends Controller{
	public function __construct(){
		parent::__construct();
	}
	/**
	 * [render Representación de las vistas para el ususario]
	 */
	function render(){

		$this->view->alcaldias = $this->listarAlcaldias();
		$this->view->render('formulario/index');
	}
	/**
	 * [listarAlcaldias Enlista alcaldías en el elemento s]
	 * @return [type] [description]
	 */
	function listarAlcaldias(){
		$alcaldias=$this->model->getAlcaldias();
		return $alcaldias;
	}
	/**
	 * [getPilares description]
	 * @return [type] [description]
	 */
	function getPilares(){
		$id = $_GET['id'];
		$country = $this->model->getPilaresById($id);
		$data=$country;
		echo json_encode($data);
	}
	/**
	 * [getColonias description]
	 * @return [type] [description]
	 */
	function getColonias(){
		$id = $_GET['id'];
		$country = $this->model->getColoniaPorId($id);
		$data=$country;
		echo json_encode($data);
	}
	/**
	 * [getMunicipios description]
	 * @return [type] [description]
	 */
	function getMunicipios(){
		$id = $_GET['id'];
		$country = $this->model->getMunicipiosPorId($id);
		$data=$country;
		echo json_encode($data);
	}
	/**
	 * [registrarUsuario description]
	 * @return [type] [description]
	 */
	function registrarUsuario(){
		/** funcion Desecha los valores de una variable. En otras palabras, limpia el contenido de una variable */
		var_dump($_POST);

		$nombre=(!is_null($_POST['nombreuser'])) ? $_POST['nombreuser'] : "Sin Datos";
		$apellidopat=(!is_null($_POST['apellidopat'])) ? $_POST['apellidopat'] : "Sin Datos";
		$apellidomat=(!is_null($_POST['apellidomat'])) ? $_POST['apellidomat'] : "Sin Datos";
		$curp=(!is_null($_POST['curp'])) ? $_POST['curp'] : "Sin Datos";
		$grupoet=(!is_null($_POST['grupoet'])) ? $_POST['grupoet'] : "Sin Datos";
		$codigoPostal=(!is_null($_POST['codigoPostal'])) ? $_POST['codigoPostal'] : "Sin Datos";
		$callenumero=(!is_null($_POST['calleNumero'])) ? $_POST['calleNumero'] : "Sin Datos";
		$timepoResidencia=(!is_null($_POST['timepoResidencia'])) ? $_POST['timepoResidencia'] : 0;
		$telCasa=(!is_null($_POST['telCasa'])) ? $_POST['telCasa'] : 0;
		$telMovil=(!is_null($_POST['telMovil'])) ? $_POST['telMovil'] : 0;
		$email=(!is_null($_POST['email'])) ? $_POST['email'] : "Sin Datos";
		$estudias=(!is_null($_POST['estudias'])) ? $_POST['estudias'] : "Sin Datos";
		$grado=(!is_null($_POST['grado'])) ? $_POST['grado'] : "Sin Datos";
		$ocupacionAct=(!is_null($_POST['ocupacionAct'])) ? $_POST['ocupacionAct'] : "Sin Datos";
		$opcionEdu=(!is_null($_POST['opcionEdu'])) ? $_POST['opcionEdu'] : "Sin Datos";
		$pilarSelect_id=(!is_null($_POST['state_id'])) ? $_POST['state_id'] : "Sin Datos";

		$this->model->setDatosContacto();
		$this->model->setCodigoPostal();
		$this->model->setColonia();
		$this->model->setAlcaldiaUsuario();
		$this->model->setDireccion();

		if (this->model->setUsuario(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC])) {
			echo "nuevo ususario creado";
		}
		this->model->setServiciosSelecionados();
		this->model->setPilarSelecionado();

	}

}
?>
