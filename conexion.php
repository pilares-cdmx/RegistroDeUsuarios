<?php
class Database{
    private $host;
    private $ db;
    private $ user;
    private $ password; 
    private $ charset;
    
    private fuction_construct(){
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
            
    }
    
    public function connect(){
       try {
           $connection= "mysql:host=".$this->host."
           ;dbname=".$this->ddb.";charset=".$this->
               charset;
        $options= [
            PDO::TTR_ERRMODE=> PDO::
            
              ERRMODE_EXCEPTION,
            PDO:: ATTR_EMULATE_PREPARES => false, 
            
        ];
           
        $pdo = new PDO ($connection, $this-> user,$this->password,$options);
           
           
           return $pdo;
           
       }catch (PDOException $e)
        print "¡Error!:" . $e->getMesage() . "<br/>
        ";
        die();
    }
}
}
?>
        
        
        
?>