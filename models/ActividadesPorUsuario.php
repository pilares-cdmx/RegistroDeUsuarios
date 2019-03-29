<?php
class ActividadesPorUsuario{

    private $Actividades_idActividades;
    private $Actividades_TiposActividades_idTiposActividades;
    private $Usuario_idUsuarios;
    private $Usuario_Direccion_idDireccion;
    private $Usuario_Direccion_Colonias_idColonia;
    private $Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    private $Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }
/*
*   GETTERS
*/

    public function getActividades_idActividades(){
        return $this->Actividades_idActividades;
    }
    public function getActividades_TiposActividades_idTiposActividades(){
        return $this->Actividades_TiposActividades_idTiposActividades;
    }
    public function getUsuario_idUsuarios(){
        return $this->Usuario_idUsuarios;
    }
    public function getUsuario_Direccion_idDireccion(){
        return $this->Usuario_Direccion_idDireccion;
    }
    public function getUsuario_Direccion_Colonias_idColonia(){
        return $this->Usuario_Direccion_Colonias_idColonia;
    }
    public function getUsuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas(){
        return $this->Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    }
    public function getUsuario_Direccion_Colonias_Alcaldias_Zonas_idZonas(){
        return $this->Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas;
    }
/**
*   setters
*/
    public function setActividades_idActividades($Actividades_idActividades){
        $this->Actividades_idActividades = $Actividades_idActividades;
    }
    public function setActividades_TiposActividades_idTiposActividades($Actividades_TiposActividades_idTiposActividades){
        $this->Actividades_TiposActividades_idTiposActividades = $Actividades_TiposActividades_idTiposActividades;
    }
    public function setUsuario_idUsuarios($Usuario_idUsuarios){
        $this->Usuario_idUsuarios = $Usuario_idUsuarios;
    }
    public function setUsuario_Direccion_idDireccion($Usuario_Direccion_idDireccion){
        $this->Usuario_Direccion_idDireccion = $Usuario_Direccion_idDireccion;
    }
    public function setUsuario_Direccion_Colonias_idColonia($Usuario_Direccion_Colonias_idColonia){
        $this->Usuario_Direccion_Colonias_idColonia = $Usuario_Direccion_Colonias_idColonia;
    }
    public function setUsuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas){
        $this->Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas = $Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    }
    public function setUsuario_Direccion_Colonias_Alcaldias_Zonas_idZonas($Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas){
        $this->Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas = $Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas;
    }

    Public function save(){

        $sql="INSERT INTO ActividadesPorUsuario VALUES(NULL,
        '{$this->getActividades_idActividades()}',
        '{$this->getActividades_TiposActividades_idTiposActividades()}',
        '{$this->getUsuario_idUsuarios()}',
        '{$this->getUsuario_Direccion_idDireccion()}',
        '{$this->getUsuario_Direccion_Colonias_idColonia()}',
        '{$this->getUsuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas()}',
        '{$this->getUsuario_Direccion_Colonias_Alcaldias_Zonas_idZonas()}'
        );";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
                $result = true;
        }
        return $result;
    }
}
?>
