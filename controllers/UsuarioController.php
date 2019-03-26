<?php
//require_once 'models/Colonias';
//require_once 'models/Alcaldias';
require_once 'models/Colonias.php';
require_once 'models/Direccion.php';
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

    public function getColoniasPorAlcaldia(){
        
        $q = intval($_GET['q']);


        $con = mysqli_connect('localhost', 'root', 'C2B1N1T2102$', 'pilaresDB');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con, "pilaresDB");
        $sql="SELECT * FROM Colonias WHERE Alcaldias_idAlcaldiasZonas = '".$q."'";
        $result = mysqli_query($con, $sql);

        echo "<table>
        <tr>
        <th>idColonia</th>
        <th>nombre</th>
        <th>Age</th>
        <th>Hometown</th>
        <th>Job</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['idColonia'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['CodigosPostales_idCodigoPostal'] . "</td>";
            echo "<td>" . $row['Alcaldias_idAlcaldiasZonas'] . "</td>";
            echo "<td>" . $row['Alcaldias_Zonas_idZonas'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
                
        /*
            $id = $_GET['id'];
            $coloniasPorAlcaldía = new Colonias();
            $coloniasPorAlcaldía->getColoniasPorId($id);
            $data = $coloniasPorAlcaldía;
            echo json_encode($data);
        */
    }
    public function save(){
        if (isset($_POST)) {

           $direccion = new Direccion();
           $direccion->setCalleYnumero($_POST['calleNumero']);
           $direccion->setIdAlcaldias($_POST['alcaldia']);
           $direccion->setIdColonia($_POST['colonia']);
           $direccion->setIdZonas($_POST['alcaldia']);

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
           $usuario->setIdDireccion();

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