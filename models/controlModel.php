<?php
/**
* Clase ControlModel mapea con la base de datos
* La informacion ingresada en el Login para el formulario
* de Registro
**/
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
require_once 'libs/model.php';
class ControlModel extends Model{
	public function __construct(){
		parent::__construct();
		
	}
	/**
	 * [validar Mapea las credenciales de acceso]
	 * @param  [type] $usuario [description]
	 * @param  [type] $pass    [description]
	 * @return [ControlModel]    [Regresa una variable global de PDO que se define
	 *  dependiendo de si las credenciales  mapean correctamente con la base de
	 *  datos o  si  son erroneas]
	 */
	
	public function validar($usuario,$pass){
			
			$conn = $this->db->conectar();
			$consulta = mysqli_query($conn, "SELECT * FROM Login WHERE nombre = '$usuario'");
			/*
			if(!$consulta){
				echo mysqli_error();
				exit;
			}
			*/
			if ($usuario = mysqli_fetch_assoc($consulta)) {
				return true;
			}else {
				return false;
			}
	
			/*
			try{		
			$consulta=$this->db->connect()->prepare(
				"SELECT * FROM Login WHERE nombre = '$usuario' AND contraseña =:pass");
			$consulta->execute([
				'nombre' =>$usuario,
				'contraseña' =>$pass]);
			return  $consulta->fetchAll(PDO::FETCH_OBJ);
	
		}catch(PDOException $e){

			$controller->mensaje=$e->getMessage();
			return false;
		}

		*/
	}
}
?>
