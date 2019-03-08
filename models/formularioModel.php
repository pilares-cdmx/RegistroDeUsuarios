	<?php
/**
 * FormularioModel  hereda de Model
 * En esta clase se administran las funciones que obtienen y
 * persisten información en la base de datos
 */
class FormularioModel extends Model {

	public function __construct() {
		parent::__construct();
	}
	/**
	 *
	 *	SECCIÓN DE GETTERS
	 *	este  conjunto de funciones hacen la cargan la información
	 *	contenida en los catalogo  de la base para que el ususario
	 *	pueda selecionar la información que se le solicita.
	 *
	 */
	public function getAlcaldias() {
		try{
			$result=array();
			$consulta=$this->db->connect()->prepare("SELECT Id,Pais FROM paises");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_OBJ);
		}catch(PDOException $e){
			$e->getMessage();
			return false;
		}
	}
	public function getPilaresById($country_id){
		try{
			$result=array();
			$consulta=$this->db->connect()->prepare("SELECT id,name FROM state where country_id=:country_id");
			$consulta->execute([
				'country_id'  =>$country_id]);
			return $consulta->fetchAll(PDO::FETCH_OBJ);
		}catch(PDOException $e){
			die($e->getMessage());
			return false;
		}
	}
	public function getColoniaPorId($id){
		try{
			$result=array();
			$consulta=$this->db->connect()->prepare("SELECT id,nombre FROM estados where Id_pais=:Id_pais");
			$consulta->execute([
				'Id_pais'  =>$id]);
			return $consulta->fetchAll(PDO::FETCH_OBJ);
		}catch(PDOException $e){
			die($e->getMessage());
			return false;
		}
	}
	/**
	 * [getMunicipiosPorId description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getMunicipiosPorId($id){
		try{
			$result=array();
			$consulta=$this->db->connect()->prepare("SELECT id,nombre FROM municipios where estado_id=:estado_id");
			$consulta->execute([
				'estado_id'  =>$id]);
			return $consulta->fetchAll(PDO::FETCH_OBJ);
		}catch(PDOException $e){
			die($e->getMessage());
			return false;
		}
	}

/**
 *
 *  SECCIÓN PARA EL REGISTRO DE DATOS
 *  debido a que estamos trabajando con una base de datos  normalizada en loas primeras tres formas normales
 *  es muy importante persistir los datos en el orden correcto  defiido en el modelo relacional
 *  se comienza persistiendo las tablas que no tienen dependencias y  se continua en cascada
 *  hata terminar con las tablas principales que dependen de todas las anteriores
 *
 */

	public function setDatosContacto($datos){

	}
	public function setCodigoPostal($datos){

	}

	public function setColonia($datos){

	}

	public function setAlcaldiaUsuario($datos){

	}

	public function setDireccion($datos){

	}

	public function setUsuario($datos){
		//echo "insertando datos de ususario";
		try {
			$query = $this->db->connect()->prepare('INSERT INTO NOMBRETABLA (COLUM1, COLUM2, COLUM...) VALUES (:value1, :value2, :value...)');
			$query->execute(['value1' => $datos['value1'], 'value2' => $datos['value2'], 'value...' => $datos['value...']]);
			return true;
		} catch (PDOException $e) {
				echo $e->getMessage();
				return flase;
		}
	}

	public function setServiciosSelecionados($datos){

	}

	public function setPilarSelecionado($datos){

	}

}
?>
