<?php
class ControlModel extends Model{
	public function __construct(){
		parent::__construct();
	}
	public function validar($usuario,$pass){
		try{
			$consulta=$this->db->connect()->prepare(
				"SELECT * FROM login WHERE usuario=:usuario and pass=:pass");
			$consulta->execute([
				'usuario'  =>$usuario,
				'pass'  =>$pass]);
			return  $consulta->fetchAll(PDO::FETCH_OBJ);;
		}catch(PDOException $e){

			$controller->mensaje=$e->getMessage();
			return false;
		}
	}
}
?>