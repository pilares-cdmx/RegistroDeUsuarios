<?php
class FormularioModel extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function getAlcaldias(){
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

}
?>