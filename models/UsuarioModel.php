<?php

class UsusarioModel extends ModeloBase{
    private $table;

    /**
     * Class constructor.
     */
    public function __construct($table)
    {
        $this->table= "Ususario";
        parent::__construct($this->$table);
    }

    public function getUnUsuario(){
        $query="SELECT * FROM Usuario WHERE correo='emailname@email.com'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

}

?>