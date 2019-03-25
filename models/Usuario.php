<?php
class Usuario extends EntidadBase {
    
    private $idUsusarios, $nombre, $apellidoPaterno, $apellidoMaterno, $curp, $sexo, $fechaNacimeinto, $entidadFederativaNacimiento, $gradoEstudios, $estudias, $ocupacionActual, $grupoEtnico, $tiempoResidencia, $correo, $telefonoCelular, $telefonoCasa, $fechaDeRegistro, $folio; 
    private $table;
    /**
     * Class constructor.
     */
    public function __construct($table)
    {
        $table = "Usuario";
        parent::__construct($table);
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



    public function setId($idUsusarios){
        $this->idUsusarios = $idUsusarios;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellidoPaterno($apellidoPaterno){
        $this->apellidoPaterno = $apellidoPaterno;
    }
    public function setApellidoMaterno($apellidoMaterno){
        $this->apellidoMaterno = $apellidoMaterno;
    }
    public function setCurp($curp){
        $this->curp = $curp;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function setFechaNacimiento($fechaNacimeinto){
        $this->fechaNacimeinto = $fechaNacimeinto;
    }

    public function setEntidadFederativaNacimiento($entidadFederativaNacimiento){
        $this->entidadFederativaNacimiento = $entidadFederativaNacimiento;
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
        $this->tiempoResidencia = $tiempoResidencia;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }
    public function setTelefonoCelular($telefonoCelular){
        $this->telefonoCelular = $telefonoCelular;
    }
    public function setTelefonoCasa($telefonoCasa){
        $this->telefonoCasa = $telefonoCasa;
    }
    public function setFechaDeRegistro($fechaDeRegistro){
        $this->fechaDeRegistro = $fechaDeRegistro;
    }
    public function setFolio($folio){
        $this->folio = $folio;
    }
    

    Public function save(){
        $query="INSERT INTO Usuario(idUsuario, nombre, apellidoPaterno, apellidoMaterno, curp, sexo, fechaNacimiento, entidadFederativaNacimiento, gradoEstudios, estudias, ocupacionActual, grupoEtnico, tiempoResidencia, correo, telefonoCelular, telefonoCasa, fechaDeRegistro, folio) "
        ."VALUES(NULL,"
        ."'".$this->nombre."',"
        ."'".$this->apellidoPaterno."',"
        ."'".$this->apellidoMaterno."',"
        ."'".$this->curp."',"
        ."'".$this->sexo."',"
        ."'".$this->fechaNacimeinto."',"
        ."'".$this->entidadFederativaNacimiento."',"
        ."'".$this->gradoEstudios."',"
        ."'".$this->estudias."',"
        ."'".$this->ocupacionActual."',"
        ."'".$this->tiempoResidencia."',"
        ."'".$this->correo."',"
        ."'".$this->telefonoCelular."',"
        ."'".$this->telefonoCasa."',"
        ."'".$this->fechaDeRegistro."',"
        ."'".$this->folio."'"
        .");";

        $save = $this->db()->query($query);
        return $save;
    }

}

?>
