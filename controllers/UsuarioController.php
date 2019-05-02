<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
require_once 'models/Actividades.php';
require_once 'models/Pilares.php';
require_once 'models/Direccion.php';
require_once 'models/Usuario.php';
require_once 'models/ActividadesPorUsuario.php';
require_once 'models/UsuariosPorPilar.php';
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
    public function cerrarSesion(){
        session_destroy();
        header("Location:".URL.'Usuario/index');
    }
    public function error(){
    //   echo "<h1> El CURP ya esta registrado </h1>";
     require_once 'views/errores/curpError.php';
    }

    public function getColoniasPorAlcaldia(){
        // echo "<h1> Estas en colonias por alcaldia</h1>";
        // $usuarioObj = new Usuario();
    }

    

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
           $direccion->setIdCodigoPostal($_POST['codigoPostal']);

           $idAlcaldia=$direccion->getIdAlcaldias();
           $direccion->setIdZonas($idAlcaldia);
            /**primero se guarda la tabla direccion**/
           $save = $direccion->save();

           $idDireccion = $direccion->lastInsertID();

           $usuario = new Usuario();
           $usuario->setNombre($_POST['nombre']);
           $usuario->setApellidoPaterno($_POST['apellidoPat']);
           $usuario->setApellidoMaterno($_POST['apellidoMat']);
           $usuario->setCurp($_POST['curp']);
            
           $curp = $usuario->getCurp();
           $usuario->uniqueCURP($curp);
        //   var_dump($usuario->uniqueCURP($curp));die; 

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
           $usuario->setIdDireccion($idDireccion);
           $usuario->setIdColonia($idDireccion);
           $usuario->setIdAlcaldias($idDireccion);
           $usuario->setIdZonas($idDireccion);

           $usuario->setPilarId($_POST['pilarSelect_id']);
           $pilarId=$usuario->getPilarId();
        //    var_dump($pilarId);die;
           $usuario->setPilarNombre($pilarId);
        //    var_dump($usuario->getPilarSelecionado());die;
           $usuario->setIdAlcaldiaPilar($pilarId);

           $IdAlcaldiaPilar = $usuario->getIdAlcaldiaPilar();
           $usuario->setFolio($pilarId, $IdAlcaldiaPilar, $curp);
        //    var_dump($usuario->getFolio());die;
        /**validacion de usuario no duplicadop */
            // $nombreUsuario = $usuario->getNombre();
            // $apellidoPaternoUsuario = $usuario->getApellidoPaterno();
            // $apellidoMaternoUsuario = $usuario->getApellidoMaterno();
            // if($usuario->registroNoDuplicado($nombreUsuario, $apellidoPaternoUsuario, $apellidoMaternoUsuario)){
               
            // }
             /**Se almacena la tabla usuario**/
             $saveUsuario = $usuario->save();
              
           $idUsuario = $usuario->lastInsertID();
        //   var_dump($idUsuario);die;

           $usuarioPorPilar = new UsuariosPorPilar();

           $usuarioPorPilar->setPilares_idPilares($pilarId);
           $usuarioPorPilar->setPilares_Direccion_idDireccion($pilarId);
           $usuarioPorPilar->setPilares_Direccion_Colonias_idColonia($pilarId);
           $usuarioPorPilar->setPilares_Direccion_Colonias_CodigosPostales_idCodigoPostal($pilarId);
           $usuarioPorPilar->setPilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($pilarId);
           $usuarioPorPilar->setPilares_Direccion_Colonias_Alcaldias_Zonas_idZonas($pilarId);
           $usuarioPorPilar->setIdUsuarios($idUsuario);
           $usuarioPorPilar->setUsuario_Direccion_idDireccion($idUsuario);
           $usuarioPorPilar->setUsuario_Direccion_Colonias_idColonia($idUsuario);
           $usuarioPorPilar->setUsuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($idUsuario);
           $usuarioPorPilar->setUsuario_Direccion_Colonias_Alcaldias_Zonas_idZonas($idUsuario);

           $saveUsuarioPorPilar =$usuarioPorPilar->save();

           $actividadesPorUsuario = new ActividadesPorUsuario();

           if (isset($_POST['opcionEdu'])) {
              $actividadesPorUsuario->setActividades_idActividades($_POST['opcionEdu']);
              $actividadesPorUsuario->setIdTiposActividades($_POST['opcionEdu']);
              $actividadesPorUsuario->setUsuario_idUsuarios($idUsuario);
              $actividadesPorUsuario->setUsuario_Direccion_idDireccion($idUsuario);
              $actividadesPorUsuario->setUsuario_idColonia($idUsuario);
              $actividadesPorUsuario->setUsuario_idAlcaldiasZonas($idUsuario);
              $actividadesPorUsuario->setUsuario_idZonas($idUsuario);

              $saveOpcionEducativa = $actividadesPorUsuario->save();
           }

           if(isset($_POST['check'])){

               foreach ($_POST['check'] as $key => $value) {
                   $actividadesPorUsuario->setActividades_idActividades($value);
                    // var_dump($value);
                   $actividadesPorUsuario->setIdTiposActividades($value);
                   $actividadesPorUsuario->setUsuario_idUsuarios($idUsuario);
                   $actividadesPorUsuario->setUsuario_Direccion_idDireccion($idUsuario);
                   $actividadesPorUsuario->setUsuario_idColonia($idUsuario);
                   $actividadesPorUsuario->setUsuario_idAlcaldiasZonas($idUsuario);
                   $actividadesPorUsuario->setUsuario_idZonas($idUsuario);

                   $saveActividadesPorUsuario = $actividadesPorUsuario->save();
               }
           }

            if ($saveUsuario && $saveUsuarioPorPilar) {
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

// ini_set('display_startup_errors', 1);
// ini_set('display_errors', 1);
// error_reporting(-1);
// require_once 'models/Actividades.php';
// require_once 'models/Pilares.php';
// require_once 'models/Direccion.php';
// require_once 'models/Usuario.php';
// require_once 'models/ActividadesPorUsuario.php';
// require_once 'models/UsuariosPorPilar.php';
// class UsuarioController{
//     public function index(){
//         //echo "Controlador usuarios, Accion index";
//         require_once 'views/formulario/login.php';
//     }

//     public function registro(){
//         require_once 'views/usuario/registro.php';
//     }
//     public function registroExitoso(){


//         require_once 'views/usuario/registroExitoso.php';
//     }
//     public function avisoPrivacidad(){
//         require_once 'views/usuario/avisoPrivacidad.php';
//     }
//     public function login(){
//         require_once 'views/formulario/login.php';

//     }
    // public function cerrarSesion(){
    //     session_destroy();
    //     header("Location:".URL.'Usuario/index');
    // }

//     public function validar(){
//       $usuarioObj = new Usuario();
//       if (isset($_POST['login']))
//       {
//           //VARIABLES DEL USUARIO
//               $usuario = $_POST['txtusuario'];
//               $pass = $_POST['txtpass'];

//               if($usuarioObj->validar($usuario,$pass)){
//                   header("Location:".URL.'Usuario/avisoPrivacidad');

//                   /*
//                   session_start();
//                   $array = $this->model->validar($usuario);
//                   foreach ($array as $row) {
//                       $_SESSION['usuario']= $row->usuario ;
//                   }
//                   */
//                   //$this->view->render('aviso-de-privacidad/index');
//               }

//               else{
//                   //$this->view->render('formulario/login');
//                   header("Location:".URL.'Usuario/login');
//               }

//           //VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
//           if (empty($usuario) || empty($pass))
//           {
//               header("Location:".URL.'Usuario/login');
//           }
//       }

//       }


//     public function save(){
//         if (isset($_POST)) {

//            $direccion = new Direccion();
//            $direccion->setCalleYnumero($_POST['calleNumero']);
//            $direccion->setIdAlcaldias($_POST['alcaldia']);
//            $direccion->setIdColonia($_POST['colonia']);
//            $direccion->setIdCodigoPostal($_POST['codigoPostal']);

//            $idAlcaldia=$direccion->getIdAlcaldias();
//            $direccion->setIdZonas($idAlcaldia);
//             /**primero se guarda la tabla direccion**/
//            $save = $direccion->save();

//            $idDireccion = $direccion->lastInsertID();
//            //var_dump($idDireccion);

//            $usuario = new Usuario();
//            $usuario->setNombre($_POST['nombre']);
//            $usuario->setApellidoPaterno($_POST['apellidoPat']);
//            $usuario->setApellidoMaterno($_POST['apellidoMat']);
//            $usuario->setCurp($_POST['curp']);
//            $curp = $usuario->getCurp();
//            $curpUnique = $usuario->uniqueCURP($curp);
//            //var_dump($curpUnique); die;
//            $curpValidate = $usuario->validate_curp($curp);
//            var_dump($curpValidate);
//           // $expReg = "/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/";
// //R3gP1lar3$  $usuario->validate_curp($_POST['curp']
//            if ($curpUnique === false) {
//              //$_SESSION['error_curpFormat'] = 'El CURP que ingresaste no es valido.';
//              $_SESSION['error_curpNoUnique'] = 'El CURP que ingresaste ya esta registrado';
//              header("Location:".URL.'Usuario/registro');
//            }elseif (!$curpValidate) {
//               $_SESSION['error_curpNoValidate'] = 'El CURP que ingresaste no cumple la validación';
//               header("Location:".URL.'Usuario/registro');
//            }
//            //$usuario->setCurp($_POST['curp']);
//            //$curp = $usuario->getCurp();

//            $usuario->setSexo($curp);
//            $usuario->setFechaNacimiento($curp);
//            $usuario->setEntidadFederativaNacimiento($curp);
//            $usuario->setGradoEstudios($_POST['grado']);
//            $usuario->setEstudias($_POST['estudias']);
//            $usuario->setOcupacionActual($_POST['ocupacionAct']);
//           // var_dump($_POST['gruPoet']);die;
//            if ($_POST['gruPoet'] || $_POST['gruPoet'] != false || $_POST['gruPoet'] != '' ) {
//              //break; exit;
//              $usuario->setGrupoEtnico($_POST['gruPoet']);
//            }else{
//              $_SESSION['error_grupoet'] = 'El campo de grupo étnico es obligatorio. Por favor selecciona tu opción.';
//              header("Location:".URL.'Usuario/registro');
//            }

//            $usuario->setTiempoResidencia($_POST['timepoResidencia']);
//            $usuario->setCorreo($_POST['email']);
//            $usuario->setTelefonoCelular($_POST['telMovil']);
//            $usuario->setTelefonoCasa($_POST['telCasa']);
//            $usuario->setIdDireccion($idDireccion);
//            $usuario->setIdColonia($idDireccion);
//            $usuario->setIdAlcaldias($idDireccion);
//            $usuario->setIdZonas($idDireccion);

//            $usuario->setPilarId($_POST['pilarSelect_id']);
//            $pilarId=$usuario->getPilarId();
//            //var_dump($pilarId); die;
//            $usuario->setPilarNombre($pilarId);
//            $usuario->setFolio($pilarId, $curp);
//            /**Se almacena la tabla usuario**/
//            $saveUsuario = $usuario->save();

//            $idUsuario = $usuario->setId();
//            //var_dump($idUsuario);die;

//            $usuarioPorPilar = new UsuariosPorPilar();

//            $usuarioPorPilar->setPilares_idPilares($pilarId);
//            $usuarioPorPilar->setPilares_Direccion_idDireccion($pilarId);
//            $usuarioPorPilar->setPilares_Direccion_Colonias_idColonia($pilarId);
//            $usuarioPorPilar->setPilares_Direccion_Colonias_CodigosPostales_idCodigoPostal($pilarId);
//            $usuarioPorPilar->setPilares_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($pilarId);
//            $usuarioPorPilar->setPilares_Direccion_Colonias_Alcaldias_Zonas_idZonas($pilarId);
//            $usuarioPorPilar->setIdUsuarios($idUsuario);
//            $usuarioPorPilar->setUsuario_Direccion_idDireccion($idUsuario);
//            $usuarioPorPilar->setUsuario_Direccion_Colonias_idColonia($idUsuario);
//            $usuarioPorPilar->setUsuario_Direccion_Colonias_Alcaldias_idAlcaldiasZonas($idUsuario);
//            $usuarioPorPilar->setUsuario_Direccion_Colonias_Alcaldias_Zonas_idZonas($idUsuario);

//            $saveUsuarioPorPilar =$usuarioPorPilar->save();

//            $actividadesPorUsuario = new ActividadesPorUsuario();

//            if (isset($_POST['opcionEdu'])) {
//               $actividadesPorUsuario->setActividades_idActividades($_POST['opcionEdu']);
//               $actividadesPorUsuario->setIdTiposActividades($_POST['opcionEdu']);
//               $actividadesPorUsuario->setUsuario_idUsuarios($idUsuario);
//               $actividadesPorUsuario->setUsuario_Direccion_idDireccion($idUsuario);
//               $actividadesPorUsuario->setUsuario_idColonia($idUsuario);
//               $actividadesPorUsuario->setUsuario_idAlcaldiasZonas($idUsuario);
//               $actividadesPorUsuario->setUsuario_idZonas($idUsuario);

//               $saveOpcionEducativa = $actividadesPorUsuario->save();
//            }

//            if(isset($_POST['check'])){

//                foreach ($_POST['check'] as $key => $value) {
//                    $actividadesPorUsuario->setActividades_idActividades($value);
//                    //var_dump($value);
//                    $actividadesPorUsuario->setIdTiposActividades($value);
//                    $actividadesPorUsuario->setUsuario_idUsuarios($idUsuario);
//                    $actividadesPorUsuario->setUsuario_Direccion_idDireccion($idUsuario);
//                    $actividadesPorUsuario->setUsuario_idColonia($idUsuario);
//                    $actividadesPorUsuario->setUsuario_idAlcaldiasZonas($idUsuario);
//                    $actividadesPorUsuario->setUsuario_idZonas($idUsuario);

//                    $saveActividadesPorUsuario = $actividadesPorUsuario->save();
//                }
//            }

//             if ($saveUsuario && $saveUsuarioPorPilar) {
//                 $_SESSION['nombreUsuarioNuevo'] = $_POST['nombre'];
//                 $_SESSION['folioUsuarioNuevo'] = $usuario->getFolio();
//                 $_SESSION['pilarUsuarioNuevo'] = $usuario->getPilarSelecionado();
//                 header("Location:".URL.'Usuario/registroExitoso');
//             }else{
//                 $_SESSION['register']= "No completado";

//             }

//         }else {
//             $_SESSION['register']= "No completado";
//         }

//     }
//     /*
//     public function __construct()
//     {
//         parent::__construct();
//     }

//     public function index(){
//         $usuario=new Usuario();

//         $allusers= $usuario->getAll();


//         $this->view("index", array(
//             "allusers"=>$allusers,
//             "Hola" => "Ejemplo de MVC"
//         ));
//     }

//     public function crear(){
//         if (isset($_POST["nombre"])) {
//             $usuario=new Ussuario();

//             $nombre=$_POST["nombre"];

//             $usuario->setNombre($nombre);

//             $save= $ususario->save();

//         }

//         $this->redirect("Usuarios", "index");
//     }

//     public function borrar(){
//         if(isset($_GET["id"])){
//             $id=(int)$_GET["id"];

//             $ususario = new Ususario();
//             $ususario->deleteById($id);

//             $this->redirect();
//         }
//     }
//  */

// }
}
?>
