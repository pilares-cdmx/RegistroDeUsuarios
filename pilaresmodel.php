<?php 


public function update ($datos){
    try{
        
        $consulta=$this->db-> connect()->prepare(
            "UPDATE=" contacto SET 
            correo= :correo,
            telefonocelular= :telefonocelular
            telefonocasa= :telefonocasa
        id = : tipo WHERE id=id")
        
        $consulta ->execute ([
        'correo'=>         $datos[ 'correo'],
        'telefonocelular'=>$datos['telefonocelular'],
        'telefonocasa'=>   $datos['telefonocasa],
        'id' =>            $datos[' id']]);
        return true;
        }catch (PDOException $e){
        $controller-> mensaje=$e->getMessage();
        return false;
        }
        

try = $this -> db -> connect ();
$quer=$consulta->prepare ('INSERT INTO 'contacto' (
correo,telefonoCelular,telefonoCasa) VALUES (:correo,:telefonoCelular,:telefonoCasa)');

$quer->bindParam (":correo",$datos['email'],PDO::PARAM_SRT);
$quer->bindParam (":correo",$datos['T1'],PDO::PARAM_SRT);
$quer->bindParam (":correo",$datos['T2'],PDO::PARAM_SRT);
$quer-> EXECUTE(); 

$id=$consulta->lastInsertID();
$consulta2=$this->db->connect();
$quer=$consult2-> prepare ('INSERT INTO 'direccion' (
calle,municipi_id) VALUES (:callenumero,:municipio)');
$quer->bindParam (":callenumero",$datos['callenumero'],PDO::PARAM_SRT);
$quer->bindParam (":municipio",$datos['municipio'],PDO::PARAM_SRT);
$quer-> EXECUTE();


return true;
} catch 