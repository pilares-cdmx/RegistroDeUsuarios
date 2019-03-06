<?php
/**
* Clase ControlModel mapea con la base de datos
* La informacion ingresada en el Login para el formulario
* de Registro
**/
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
		try{
			/** @var [ControlModel] [variable encargada de hacer la consulta a la base] */
			$consulta=$this->db->connect()->prepare(
				"SELECT * FROM login WHERE usuario=:usuario and pass=:pass");
			$consulta->execute([
				'usuario'  =>$usuario,
				'pass'  =>$pass]);
			return  $consulta->fetchAll(PDO::FETCH_OBJ);
		}catch(PDOException $e){

			$controller->mensaje=$e->getMessage();
			return false;
		}
	}
}
?>
