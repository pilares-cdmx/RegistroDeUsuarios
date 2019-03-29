<?php
class UsuariosPorPilar{

    private $Pilares_idPilares;
    private $Pilares_Direccion_idDireccion;
    private $Pilares_Direccion_Colonias_idColonia;
    private $Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    private $Pilares_Direccion_Colonias_Alcaldias_Zonas_idZonas;
    private $Usuario_idUsuarios;
    private $Usuario_Direccion_idDireccion;
    private $Usuario_Direccion_Colonias_idColonia;
    private $Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    private $Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }
/**
*   GETTERS
*/
    public function getPilares_idPilares(){
        return $this->Pilares_idPilares;
    }
    public function getPilares_Direccion_idDireccion(){
        return $this->Pilares_Direccion_idDireccion;
    }
    public function getPilares_Direccion_Colonias_idColonia(){
        return $this->Pilares_Direccion_Colonias_idColonia;
    }
    public function getPilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas(){
        return $this->Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    }
    public function getPilares_Direccion_Colonias_Alcaldias_Zonas_idZonas(){
        return $this->Pilares_Direccion_Colonias_Alcaldias_Zonas_idZonas;
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
    public function setPilares_idPilares($Pilares_idPilares){
        $this->Pilares_idPilares = $Pilares_idPilares;
    }
    public function setPilares_Direccion_idDireccion($pilarId){
        //$this->Pilares_Direccion_idDireccion = $Pilares_Direccion_idDireccion;
        $query="SELECT * FROM Pilares WHERE idPilares = '$pilarId'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Pilares_Direccion_idDireccion = $row['Direccion_idDireccion'];
        }else {
            echo "No encontré tu Direccion_idDireccion";
        }
    }
    public function setPilares_Direccion_Colonias_idColonia($pilarId){
        //$this->Pilares_Direccion_Colonias_idColonia = $Pilares_Direccion_Colonias_idColonia;
        $query="SELECT * FROM Pilares WHERE idPilares = '$pilarId'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Pilares_Direccion_Colonias_idColonia = $row['Direccion_Colonias_idColonia'];
        }else {
            echo "No encontré tu Direccion_Colonias_idColonia";
        }
    }
    public function setPilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($pilarId){
        //$this->Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas = $Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
        $query="SELECT * FROM Pilares WHERE idPilares = '$pilarId'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Pilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas = $row['Direccion_Colonias_Alcaldias_idAlcaldiasZonas'];
        }else {
            echo "No encontré tu Direccion_Colonias_Alcaldias_idAlcaldiasZonas";
        }
    }
    public function setPilares_Direccion_Colonias_Alcaldias_Zonas_idZonas($pilarId){
        //$this->Pilares_Direccion_Colonias_Alcaldias_Zonas_idZonas = $Pilares_Direccion_Colonias_Alcaldias_Zonas_idZonas;
        $query="SELECT * FROM Pilares WHERE idPilares = '$pilarId'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Pilares_Direccion_Colonias_Alcaldias_Zonas_idZonas = $row['Direccion_Colonias_Alcaldias_Zonas_idZonas'];
        }else {
            echo "No encontré tu Direccion_Colonias_Alcaldias_Zonas_idZonas";
        }
    }
    public function setIdUsuarios($idUsuario){
        $this->Usuario_idUsuarios = $Usuario_idUsuarios;
    }
    public function setUsuario_Direccion_idDireccion($idUsuario){
        //$this->Usuario_Direccion_idDireccion = $Usuario_Direccion_idDireccion;
        $query="SELECT * FROM Usuario WHERE idPilares = '$idUsuario'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Usuario_Direccion_idDireccion = $row['Direccion_idDireccion'];
        }else {
            echo "No encontré tu Direccion_idDireccion";
        }
    }
    public function setUsuario_Direccion_Colonias_idColonia($idUsuario){
        //$this->Usuario_Direccion_Colonias_idColonia = $Usuario_Direccion_Colonias_idColonia;
        $query="SELECT * FROM Usuario WHERE idPilares = '$idUsuario'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Usuario_Direccion_Colonias_idColonia = $row['Direccion_Colonias_idColonia'];
        }else {
            echo "No encontré tu Direccion_Colonias_idColonia";
        }
    }
    public function setUsuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($idUsuario){
        //$this->Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas = $Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
        $query="SELECT * FROM Usuario WHERE idPilares = '$idUsuario'";
        $tmp = $this->db->query($query);
        if ($row = mysqli_fetch_array($tmp)) {
            $this->Usuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas = $row['Direccion_Colonias_Alcaldias_idAlcaldiasZonas'];
        }else {
            echo "No encontré tu Direccion_Colonias_Alcaldias_idAlcaldiasZonas";
        }
    }
    public function setUsuario_Direccion_Colonias_Alcaldias_Zonas_idZonas($idUsuario){
        //$this->Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas = $Usuario_Direccion_Colonias_Alcaldias_Zonas_idZonas;

    }


    Public function save(){

        $sql="INSERT INTO UsuariosPorPilar VALUES(NULL,
        '{$this->getPilares_idPilares()}',
        '{$this->getPilares_Direccion_idDireccion()}',
        '{$this->getPilares_Direccion_Colonias_idColonia()}',
        '{$this->getPilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas()}',
        '{$this->getPilares_Direccion_Colonias_Alcaldias_Zonas_idZonas()}',
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
