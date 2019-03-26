<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
class Usuario{
    
    private $idUsusarios; 
    private $nombre; 
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $curp;
    private $sexo;
    private $fechaNacimiento;
    private $entidadFederativaNacimiento;
    private $gradoEstudios;
    private $estudias;
    private $ocupacionActual;
    private $grupoEtnico;
    private $tiempoResidencia;
    private $correo;
    private $telefonoCelular;
    private $telefonoCasa;
    private $fechaDeRegistro;
    private $folio;
    private $Direccion_idDireccion;
    private $Direccion_Colonias_idColonia;
    private $Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    private $Direccion_Colonias_Alcaldias_Zonas_idZonas; 
    private $db;


    //private $table;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->db = Database::connect();
    }


    public function getId(){
        return $this->idUsusarios;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidoPaterno(){
        return $this->apellidoPaterno;
    }
    public function getApellidoMaterno(){
        return $this->apellidoMaterno;
    }
    public function getCurp(){
        return $this->curp;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function getEntidadFederativaNacimiento(){
        return $this->entidadFederativaNacimiento;
    }
    public function getGradoEstudios(){
        return $this->gradoEstudios;
    }
    public function getEstudias(){
        return $this->estudias;
    }
    public function getOcupacionActual(){
        return $this->ocupacionActual;
    }

    public function getGrupoEtnico(){
        return $this->grupoEtnico;
    }
    public function getTiempoResidencia(){
        return $this->tiempoResidencia;
    }
    public function getCorreo(){
        return $this->correo;
    }

    public function getTelefonoCelular(){
        return $this->telefonoCelular;
    }
    public function getTelefonoCasa(){
        return $this->telefonoCasa;
    }
    public function getFechaDeRegistro(){
        return $this->fechaDeRegistro;
    }
    public function getFolio(){
        return $this->folio;
    }
    public function getIdDireccion(){
        return $this->Direccion_idDireccion;
    }
    public function getIdColonia(){
        return $this->Direccion_Colonias_idColonia;
    }
    public function getIdAlcaldias(){
        return $this->Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    }
    public function getIdZonas(){
        return $this->Direccion_Colonias_Alcaldias_Zonas_idZonas;
    }




    public function setId($idUsusarios){
        $this->idUsusarios = $idUsusarios;
    }
    public function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    public function setApellidoPaterno($apellidoPaterno){
        $this->apellidoPaterno = $this->db->real_escape_string($apellidoPaterno);
    }
    public function setApellidoMaterno($apellidoMaterno){
        $this->apellidoMaterno = $this->db->real_escape_string($apellidoMaterno);
    }
    public function setCurp($curp){
        $this->curp = $this->db->real_escape_string($curp);
    }
    public function setSexo($curp){
        $this->sexo = substr($curp, 10, 1);
    }
    public function setFechaNacimiento($curp){
        $this->fechaNacimiento = substr($curp, 4, 2).substr($curp, 6, 2).substr($curp, 8, 2);
    }

    public function setEntidadFederativaNacimiento($curp){
        $this->entidadFederativaNacimiento = substr($curp, 11, 2);
    }
    public function setGradoEstudios($gradoEstudios){
        $this->gradoEstudios = $gradoEstudios;
    }
    public function setEstudias($estudias){
        $this->estudias = $estudias;
    }
    public function setOcupacionActual($ocupacionActual){
        $this->ocupacionActual = $ocupacionActual;
    }

    public function setGrupoEtnico($grupoEtnico){
        $this->grupoEtnico = $grupoEtnico;
    }
    public function setTiempoResidencia($tiempoResidencia){
        $this->tiempoResidencia = $this->db->real_escape_string($tiempoResidencia);
    }

    public function setCorreo($correo){
        $this->correo = $this->db->real_escape_string($correo);
    }
    public function setTelefonoCelular($telefonoCelular){
        $this->telefonoCelular = $this->db->real_escape_string($telefonoCelular);
    }
    public function setTelefonoCasa($telefonoCasa){
        $this->telefonoCasa = $telefonoCasa;
    }
    
    public function setFechaDeRegistro(){
        $this->fechaDeRegistro = null;
    
    }

    public function setFolio(){
        
        $this->folio = rand(9999, 32786);
    }
    public function setIdDireccion($Direccion_idDireccion){
        $this->Direccion_idDireccion = $Direccion_idDireccion;
    }
    public function setIdColonia($idUsusaDireccion_Colonias_idColoniarios){
        $this->Direccion_Colonias_idColonia = $Direccion_Colonias_idColonia;
    }
    public function setIdAlcaldias($Direccion_Colonias_Alcaldias_idAlcaldiasZonas){
        $this->Direccion_Colonias_Alcaldias_idAlcaldiasZonas = $Direccion_Colonias_Alcaldias_idAlcaldiasZonas;
    }
    public function setIdZonas($Direccion_Colonias_Alcaldias_Zonas_idZonas){
        $this->Direccion_Colonias_Alcaldias_Zonas_idZonas = $Direccion_Colonias_Alcaldias_Zonas_idZonas;
    }
    

    Public function save(){

    $sql="INSERT INTO UsuarioPrueba VALUES(NULL, 
    '{$this->getNombre()}',
    '{$this->getApellidoPaterno()}',
    '{$this->getApellidoMaterno()}',
    '{$this->getCurp()}',
    '{$this->getSexo()}',
    '{$this->getFechaNacimiento()}',
    '{$this->getEntidadFederativaNacimiento()}',
    '{$this->getGradoEstudios()}',
    '{$this->getEstudias()}',
    '{$this->getOcupacionActual()}',
    '{$this->getGrupoEtnico()}',
    '{$this->getTiempoResidencia()}',
    '{$this->getCorreo()}',
    '{$this->getTelefonoCelular()}',
    '{$this->getTelefonoCasa()}',
      NULL,
    '{$this->getFolio()}'
    );";
        $save = $this->db->query($sql);
           
        $result = false;

        if ($save) {
            $result = true;
        }
        return $result;
    }

}

/*
    '{$this->getFolio()}',
    '{$this->getIdDireccion()}',
    '{$this->getIdColonia()}',
    '{$this->getIdAlcaldias()}',
    '{$this->getIdZonas()}'
*/

?>