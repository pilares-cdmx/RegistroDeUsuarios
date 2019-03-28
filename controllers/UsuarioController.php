<?php
//require_once 'models/Colonias';
//require_once 'models/Alcaldias';
require_once 'models/Colonias.php';
require_once 'models/Direccion.php';
require_once 'models/Usuario.php';
class UsuarioController{
    public function index(){
        //echo "Controlador usuarios, Accion index";
        require_once 'views/formulario/login.php';
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }
    public function registroExitoso(){


        require_once 'views/usuario/registroExitoso.php';
    }
    public function avisoPrivacidad(){
        require_once 'views/usuario/avisoPrivacidad.php';
    }
    public function login(){
        require_once 'views/formulario/login.php';
    }
    /**
     * [validar description]
     * @return [type] [description]
     */
    public function validar(){
      $usuarioObj = new Usuario();
      if (isset($_POST['login']))
      {
          //VARIABLES DEL USUARIO
              $usuario = $_POST['txtusuario'];
              $pass = $_POST['txtpass'];

              if($usuarioObj->validar($usuario,$pass)){
                  header("Location:".URL.'Usuario/avisoPrivacidad');

                  /*
                  session_start();
                  $array = $this->model->validar($usuario);
                  foreach ($array as $row) {
                      $_SESSION['usuario']= $row->usuario ;
                  }
                  */
                  //$this->view->render('aviso-de-privacidad/index');
              }

              else{
                  //$this->view->render('formulario/login');
                  header("Location:".URL.'Usuario/login');
              }

          //VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
          if (empty($usuario) || empty($pass))
          {
              header("Location:".URL.'Usuario/login');
          }
      }

      }

    public function save(){
        if (isset($_POST)) {

           $direccion = new Direccion();
           $direccion->setCalleYnumero($_POST['calleNumero']);
           $direccion->setIdAlcaldias($_POST['alcaldia']);
           $direccion->setIdColonia($_POST['colonia']);
           $direccion->setIdZonas($_POST['alcaldia']);
           $idDireccion = $direccion->lastInsertID();
           $save = $direccion->save();

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
           $usuario->setFolio();
           $usuario->setIdDireccion($idDireccion);

           $usuario->setPilarNombre($_POST['pilarSelect_id']);
           $usuario->setPilarId($_POST['pilarSelect_id']);


           $save = $usuario->save();

           $idUsuario = $usuario->lastInsertID();
           $usuario->setId($idUsuario);
            //var_dump($usuario->setSexo($usuario->getCurp()));
            if ($save) {
                $_SESSION['nombreUsuarioNuevo'] = $_POST['nombre'];
                $_SESSION['folioUsuarioNuevo'] = $usuario->getFolio();
                $_SESSION['pilarUsuarioNuevo'] = $usuario->getPilarSelecionado();
                header("Location:".URL.'Usuario/registroExitoso');
            }else{
                $_SESSION['register']= "No completado";

            }

        }else {
            $_SESSION['register']= "No completado";
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
