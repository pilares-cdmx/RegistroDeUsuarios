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

		$alcaldias = $this->listarAlcaldias();
		$this->view->render('formulario/mascara');
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
		$pilares = $this->model->getPilaresById($id);
		$data=$pilares;
		echo json_encode($data);
	}
	/**
	 * [getColonias description]
	 * @return [type] [description]
	 */
	function getColonias(){
		$id = $_GET['id'];
		$colonias = $this->model->getColoniaPorId($id);
		$data=$colonias;
		echo json_encode($data);
	}
	/**
	 * [getMunicipios description]
	 * @return [type] [description]
	 */
	function getCodigoPostal(){
		$id = $_GET['id'];
		$codPostal = $this->model->getCodigoPostalPorId($id);
		$data=$codPostal;
		echo json_encode($data);
	}

	function creaFolio(){
		$folio = $this->model->getFolio();
		return $folio;
	}



	/**
	 * [registrarUsuario description]
	 * @return [type] [description]
	 */
	function registrarUsuario(){
		/** funcion Desecha los valores de una variable. En otras palabras, limpia el contenido de una variable */
		var_dump($_POST);
		/**
		 * Capturando en variables de PHP los datos ingresados por el ususario.
		 */
		$nombre=(!is_null($_POST['nombreuser'])) ? $_POST['nombreuser'] : "Sin Datos";
		$apellidopat=(!is_null($_POST['apellidopat'])) ? $_POST['apellidopat'] : "Sin Datos";
		$apellidomat=(!is_null($_POST['apellidomat'])) ? $_POST['apellidomat'] : "Sin Datos";
		$curp=(!is_null($_POST['curp'])) ? $_POST['curp'] : "Sin Datos";
		$sexo = substr($curp, 10, 1);
		$fechaNacimiento = substr($curp, 4, 2)."-".substr($curp, 6, 2)."-".substr($curp, 8, 2);
		$entidadNacimiento = substr($valor, 11, 2);
		$grado=(!is_null($_POST['grado'])) ? $_POST['grado'] : "Sin Datos";
		$estudias=(!is_null($_POST['estudias'])) ? $_POST['estudias'] : "Sin Datos";
		$ocupacionAct=(!is_null($_POST['ocupacionAct'])) ? $_POST['ocupacionAct'] : "Sin Datos";
		$grupoet=(!is_null($_POST['grupoet'])) ? $_POST['grupoet'] : "Sin Datos";
		$timepoResidencia=(!is_null($_POST['timepoResidencia'])) ? $_POST['timepoResidencia'] : 0;
		$email=(!is_null($_POST['email'])) ? $_POST['email'] : "Sin Datos";
		$telMovil=(!is_null($_POST['telMovil'])) ? $_POST['telMovil'] : 0;
		$telCasa=(!is_null($_POST['telCasa'])) ? $_POST['telCasa'] : 0;
		$fechaRegistro;
		$folio;
		$codigoPostal=(!is_null($_POST['codigoPostal'])) ? $_POST['codigoPostal'] : "Sin Datos";
		$callenumero=(!is_null($_POST['calleNumero'])) ? $_POST['calleNumero'] : "Sin Datos";
		
		
		$opcionEdu=(!is_null($_POST['opcionEdu'])) ? $_POST['opcionEdu'] : "Sin Datos";
		

		/**
		 * Llamando a las funciones declaradas en el formularioModel para hacer el almacenamiento en la base
		 */

		$this->model->setDireccion(
			['calle' => '',
			 'numero' => $email,
			 'telefonoCelular' => $telMovil,
			 'telefonoCasa' => $telCasa]
		 );

/*		 
		$this->model->setCodigo
		Postal(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC]);
		$this->model->setColonia(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC]);
		$this->model->setAlcaldiaUsuario(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC]);
		$this->model->setDireccion(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC]);

		if (this->model->setUsuario(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC])) {
			echo "nuevo ususario creado";
		}
		this->model->setServiciosSelecionados(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC]);
		this->model->setPilarSelecionado(['value1' => $value1, 'value2' => $value2, 'valueETC' => $valueETC]);
*/
	}

}
?>
