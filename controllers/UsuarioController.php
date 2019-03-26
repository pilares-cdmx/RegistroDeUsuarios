<?php

require_once 'models/Usuario.php';
class UsuarioController{
    public function index(){
        echo "Controlador usuarios, Accion index";  
    }
    
    public function registro(){
        require_once 'views/usuario/registro.php';
    }
    public function registroExitoso(){
        require_once 'views/usuario/registroExitoso.php';
    }
    public function save(){
        if (isset($_POST)) {
           $usuario = new Usuario();
           $usuario->setNombre($_POST['nombre']);
           $usuario->setApellidoPaterno($_POST['apellidoPat']);
           $usuario->setApellidoMaterno($_POST['apellidoMat']);
           $usuario->setCurp($_POST['curp']);
           $curp = $usuario->getCurp();  
           $usuario->setSexo($curp);
           $usuario->setFechaNacimiento($curp);
           $usuario->setEntidadFederativaNacimiento($curp);  
           $usuario->setGradoEstudios($_POST['grado']);
           $usuario->setEstudias($_POST['estudias']);
           $usuario->setOcupacionActual($_POST['ocupacionAct']);
           $usuario->setGrupoEtnico($_POST['gruPoet']);
           $usuario->setTiempoResidencia($_POST['timepoResidencia']);
           $usuario->setCorreo($_POST['email']);
           $usuario->setTelefonoCelular($_POST['telMovil']);
           $usuario->setTelefonoCasa($_POST['telCasa']);
           $usuario->setFechaDeRegistro();
           /*  
           $usuario->setFolio();
           */
           $save = $usuario->save();
            //var_dump($usuario->setSexo($usuario->getCurp()));
            if ($save) {
                header("Location:".URL.'Usuario/registroExitoso');
            }else{

                echo "registro Fallido";
            }
            
        }
    }
    /*
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $usuario=new Usuario();

        $allusers= $usuario->getAll();


        $this->view("index", array(
            "allusers"=>$allusers,
            "Hola" => "Ejemplo de MVC"
        ));
    }

    public function crear(){
        if (isset($_POST["nombre"])) {
            $usuario=new Ussuario();

            $nombre=$_POST["nombre"];

            $usuario->setNombre($nombre);

            $save= $ususario->save();
            
        }

        $this->redirect("Usuarios", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];

            $ususario = new Ususario();
            $ususario->deleteById($id);

            $this->redirect();
        }
    }
 */   

}
?>