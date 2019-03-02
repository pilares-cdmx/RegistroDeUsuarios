<?php
    
    include "db.php";
    $db =  connect();
    $query=$db->query("select * from country");
    $countries = array();
    while($r=$query->fetch_object()){ $countries[]=$r; }
    

?>

<?php
//clases base que heredarán las siguientes clases
	class Model{
		function __construct(){
			$this->db = new Database();
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilosFormularios.css">
  <title>Formulario de registro</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/estiloFormulario.css" />
  <script src="js/jquery-1.8.2.js"></script>
  <script src="js/jquery-ui.js"></script>
	<script src="js/JsonAnidados.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
  <img src="img/form-img/cenefa3.jpg"
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>FORMULARIO DE REGISTRO</h1>
      </div>
    </div>
  </div><br>
 <form action="pilaresmodel.php" method="POST">

    <div class="container">
      <fieldset>
       <legend>DATOS PERSONALES</legend>
       <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="nombre">Nombre(s)</label><br>
          <input id="nombre" type="text" class="validate" name="nombreuser" style="text-transform:uppercase;" size="30">


        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="ap_pat">Apellido Paterno</label><br>
          <input id="ap_pat" type="text" class="validate" name="apellidopat" style="text-transform:uppercase;" size="30">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="ap_mat">Apellido Materno</label><br>
          <input id="ap_mat" type="text" class="validate" name="apellidomat" style="text-transform:uppercase;" size="30">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="curp" class="active ">CURP</label><br>
          <input   maxlength="18"  id="curp" name="curp" type="text" class="validate" oninput="validarInput(this)"
          style="text-transform:uppercase;" maxlength="18" size="30">
          <small class="form-text text-muted" tabindex="0">Consulta tu CURP <a href="https://www.gob.mx/curp/" target="popup" onclick="window.open(this.href, this.target, 'width=900px,height=800px'); return false;">aquí</a> </small>
          <div id="curp-error" name="curp-error"></div>
          <pre id="resultado"></pre>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Grupo étnico</label><br>
            <select name="grupoet">
              <option value="0" disabled selected>Selecciona</option>
              <option value="1">Náhuatl</option>
              <option value="2">Mixteco</option>
              <option value="3">Otomí</option>
              <option value="4">Mazateco</option>
              <option value="5">Zapoteco</option>
              <option value="6">Mazahua</option>
              <option value="7">Totonaca</option>
              <option value="8">Mixe</option>
              <option value="9">Chinanteco</option>
              <option value="10">Tlapaneco</option>
              <option value="11">Maya</option>
              <option value="12">Purépecha (Tarasco)</option>
              <option value="13">Tzeltal</option>
              <option value="14">Triqui</option>
              <option value="15">Huasteco</option>
              <option value="16">Tzotzil</option>
              <option value="17">Pueblo Originario (CDMX)</option>
              <option value="18">Otro</option>
            </select>
          </div>
        </div>
      </fieldset>
    </div>

  <div class="container">
    <fieldset>
      <legend>DATOS DE CONTACTO</legend>


	   <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
		<form name="guarda" action="conexionv2.php" method="post" >
		 <label for="nombre">Alcaldia </label><br>
        <select name="pais" id="pais" ></select>
      </select>
	   </div>

      </div>

	<div class="row">
        <div class="col-lg-12 col-md-30 estilo-forma">
		<form name="guarda" action="conexionv2.php" method="post" >
		 <label for="nombre">Colonia </label><br>
        <select name="estados" id="estados"  ></select>
      </select>

	   </div>
      </div>

	 <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
		<form name="guarda" action="conexionv1.php" method="post" >
		 <label for="nombre">Codigo Postal </label><br>
       <select name="municipio" id="municipio"  ></select>
      </select>
	   </div>
      </div>

         <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="nombre">Calle y Número</label><br>
          <input id="nombre" type="text" class="validate" name="callenumero" style="text-transform:uppercase;" size="30">

        </div>
      </div>


	  <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="numrec">Tiempo en recidencia CDMX</label><br>
          <input onkeypress="return justNumbers(event);" maxlength="3"  id="numrec" type="text" class="validate" name="numre" >
		  <small id="residenciaHelp" class="form-text text-muted">Tiempo en años</small>
        </div>
      </div>


	  <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="tel" <input type="number">Télefono de casa</label><br>
          <input onkeypress="return justNumbers(event);" maxlength="12" id="tel"  type="text" class="validate" name="t1"   >
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="cel" <input type="number">Teléfono celular</label><br>
          <input onkeypress="return justNumbers(event);" maxlength="12" id="cel" type="text" name="t2" class="validate">
        </div>
      </div>

      <div class="col-lg-12 col-md-12 estilo-forma">
        <label for="correo">Correo</label><br>
        <input type="correo" class="validate" name= "email" id="correo" aria-describedby="emailHelp" >
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
    </fieldset>
  </div>

<div class="container">
    <fieldset>
      <legend>DATOS ESCOLARES</legend>
      <div class="row">
          <div class="col-lg-12 col-md-12">
            <label>¿Estudias actualmente?</label>
            <div class="radio">
              <input name="estudias1" type="radio" id="4" value="4">
              <label for="4" class="rc_sty">Si</label>
              <input name="estudias2" type="radio" id="5" value="5">
              <label for="5" class="rc_sty">No</label>
            </div>
          </div>
        </div>



       <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Último grado de estudios</label><br>
			<select name="grado">
              <option value="0" disabled selected>Selecciona</option>
              <option value="1">Preprimaria</option>
              <option value="2">1º de primaria</option>
              <option value="3">2º de primaria</option>
              <option value="4">3º de primaria</option>
              <option value="5">4º de primaria</option>
              <option value="6">5º de primaria</option>
              <option value="7">6º de primaria</option>
              <option value="8">1º de secundaria</option>
              <option value="9">2º de secundaria</option>
              <option value="10">3º de secundaria</option>
              <option value="11">1er. semestre de bachillerato</option>
              <option value="12">2do. semestre de bachillerato</option>
              <option value="13">3er. semestre de bachillerato</option>
              <option value="14">4to. semestre de bachillerato</option>
              <option value="15">5to. semestre de bachillerato</option>
              <option value="16">6to. semestre de bachillerato</option>
              <option value="17">Licenciatura trunca</option>
              <option value="18">Licenciatura sin título</option>
              <option value="19">Licenciatura con título</option>
              <option value="20">Posgrado</option>
            </select>
          </div>
        </div>

      <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Ocupación actual</label><br>

			<select name="ocupacionact">
              <option value="0"  disabled selected>Selecciona</option>
              <option value="1">Estudiantes</option>
              <option value="2">Profesionistas</option>
              <option value="3">Técnicos</option>
              <option value="4">Trabajadores de la educación</option>
              <option value="5">Trabajadores del arte, espectáculos y deportes</option>
              <option value="6">Funcionarios y directivos de los sectores públicos, privado y social </option>
              <option value="7">Trabajadores en actividaees agrícolas, ganaderas, silvícolas y de caza y pezca</option>
              <option value="8">Jefes, supervisores y otros trabajadores de control en la fabricación artesanal e industrial y en actividades de reparación y mantenimiento</option>
              <option value="9">Artesanos y trabajadores fabriles en la industria de la transformación y trabajadores en actividades de reparación y mantenimiento</option>
              <option value="10">Operadores de maquinaria fija de movimiento continuo y equipos en el proceso de fabricación industrial</option>
              <option value="11">Ayudantes, peones y similares en el proceso de fabricación artesanal e industrial y en actividades de reparación y mantenimiento</option>
              <option value="12">Conductores y ayudantes de conductores de maquinaria móvil y medios de transporte</option>
              <option value="13">Jefes de departamento, coordinadores y supervisires en actividades administrativas y de servicios</option>
              <option value="14">Trabajadores de apoyo en actividades administrativas</option>
              <option value="15">Comerciantes, empleados de comercio y agentes de ventas</option>
              <option value="16">Vendedores ambulantes y trabajadores ambulantes de servicios</option>
              <option value="17">Trabajadores en servicios personales</option>
              <option value="18">Trabajores en servicios domésticos</option>
              <option value="19">Trabajadores en servicios de protección y vigilancia y fuerzas armadas</option>
              <option value="20">Otros trabajadores con ocupaciones no especificadas</option>
            </select>
          </div>
        </div>
      </fieldset>
    </div>

   <div class="container">
      <fieldset>
        <legend>SERVICIOS</legend>


        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">

			<label>Cultura</label>
            <div class="checkbox">
              <p>
                <input type="checkbox" name="team1" id="cul1" />
                <label for="cul1" class="rc_sty" value= "Teatro">Teatro</label>

                <input type="checkbox" name="cultura2" id="cul2" />
                <label for="cul2" class="rc_sty" value= "Danza">Danza</label>

                <input type="checkbox" name="cultura3" id="cul3" />
                <label for="cul3" class="rc_sty" value= "Ballet">Ballet</label>

                <input type="checkbox" name="cultura4" id="cul4" />
                <label for="cul4" class="rc_sty" value= "Perfonmance">Perfonmance</label>

                <input type="checkbox" name="cultura5" id="cul5" />
                <label for="cul5" class="rc_sty" value= "Música">Música</label>

                <input type="checkbox" name="cultura6" id="cul6" />
                <label for="cul6" class="rc_sty" value= "Encuadernación">Encuadernación</label>

                <input type="checkbox" name="cultura7" id="cul7" />
                <label for="cul7" class="rc_sty" value= "Reciclaje">Reciclaje</label>

                <input type="checkbox" name="cultura8" id="cul8" />
                <label for="cul8" class="rc_sty" value= "Artesplasticas">Artes plásticas y artes gráficas</label>

                <input type="checkbox" name="cultura9" id="cul9" />
                <label for="cul9" class="rc_sty" value= "Fotografia">Fotografía</label>

                <input type="checkbox" name="cultura10" id="cul10" />
                <label for="cul10" class="rc_sty" value= "Videodoc">Video documental</label>

                <input type="checkbox" name="cultura11" id="cul11" />
                <label for="cul11" class="rc_sty" value= "Stopmotion">Stop motion</label>

                <input type="checkbox" name="cultura12" id="cul12" />
                <label for="cul12" class="rc_sty" value= "Arteybio">Arte y biología</label>

                <input type="checkbox" name="cultura13" id="cul13" />
                <label for="cul13" class="rc_sty" value= "Tallerdehu">Taller de huerto</label>

                <input type="checkbox" name="cultura14" id="cul14" />
                <label for="cul14" class="rc_sty" value= "Ceramica">Cerámica</label>

                <input type="checkbox" name="cultura15" id="cul15" />
                <label for="cul15" class="rc_sty" value= "Libroclub">Libroclub</label>

                <input type="checkbox" name="cultura16" id="cul16" />
                <label for="cul16" class="rc_sty" value= "Cineclub">Cineclub y trashumante radio comunitaria</label>
              </p>
            </div>
          </div>
        </div>






        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Deporte</label>
            <div class="checkbox">
              <p>
                <input type="checkbox" name="dep1" id="dep1" />
                <label for="dep1" class="rc_sty">Escuela técnico deportiva futbol</label>

                <input type="checkbox" name="dep2" id="dep2" />
                <label for="dep2" class="rc_sty">Escuela técnico deportiva básquetbol</label>
              </p>

              <p>
                <input type="checkbox" name="dep3" id="dep3" />
                <label for="dep3" class="rc_sty">Escuela técnico deportiva volivol</label>

                <input type="checkbox" name="dep4" id="dep4" />
                <label for="dep4" class="rc_sty">Activación física</label>
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Opción educativa</label><br>
            <select name="opedu">
			   <option value="0" disabled selected>Selecciona</option>
			   <option value="1">Ciberescuela</option>
              <option value="1">Alfabetización</option>
              <option value="2">Primaria</option>
              <option value="3">Secundaria</option>
              <option value="4">BADI</option>
              <option value="5">Prepa en línea SEP</option>
              <option value="6">CENEVAL</option>
              <option value="7">COLBACH</option>
              <option value="8">Prepa abierta</option>
              <option value="9">B@UNAM</option>
              <option value="10">UnADM</option>
              <option value="11">Licenciatura en linea</option>
              <option value="12">Licenciaturas CDMX</option>
              <option value="13">Asesorias primaria</option>
              <option value="14">Asesorias secundaria</option>
              <option value="15">Asesorias bachillerato</option>
              <option value="16">Asesorias licenciatura</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Talleres de habilidades cognitivas</label><br>
            <div class="checkbox">

              <input type="checkbox" name="tallerh1" id="cog1" />
              <label for="cog1" class="rc_sty">Ajedrez</label>

              <input type="checkbox" name="tallerh2" id="cog2" />
              <label for="cog2" class="rc_sty">Club de Ciencias</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Talleres de habilidades digitales</label>
            <div class="checkbox">
              <p>
                <input type="checkbox" name="tallerh3" id="dig1" />
                <label for="dig1" class="rc_sty">Programapp´s y robótica</label>

                <input type="checkbox" name="tallerh4" id="dig2" />
                <label for="dig2" class="rc_sty">Diseño, reparacion y soporte</label>
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Talleres de habilidades emocionales</label><br>
            <div class="checkbox">
              <p>
                <input type="checkbox" name="tallerh5" id="emo1" />
                <label for="emo1" class="rc_sty">Amor y sexualidad</label>

                <input type="checkbox" name="tallerh6" id="emo2" />
                <label for="emo2" class="rc_sty">Prevención de adicciones</label>

                <input type="checkbox" name="tallerh7" id="emo3" />
                <label for="emo3" class="rc_sty">Habilidades para la vida</label>

                <input type="checkbox" name="tallerh8" id="emo4" />
                <label for="emo4" class="rc_sty">Proyecto de vida</label>
              </p>

              <p>
                <input type="checkbox" name="tallerh9" id="emo5" />
                <label for="emo5" class="rc_sty">Autoestima</label>

                <input type="checkbox" name="tallerh10" id="emo6" />
                <label for="emo6" class="rc_sty">Tanatología o manejo del duelo</label>

                <input type="checkbox" name="tallerh11" id="emo7" />
                <label for="emo7" class="rc_sty">Inteligencia emocional</label>
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Talleres de autonomía económica</label><br>
            <div class="checkbox">

              <div class="row">
				<div class="col-lg-4">
                <input type="checkbox" name="eco1" id="econo1" />
                <label for="econo1" class="rc_sty">Carpintería</label>
				<br>

                <input type="checkbox" name="eco2" id="econo2" />
                <label for="econo2" class="rc_sty">Plomería</label>
				<br>

                <input type="checkbox" name="eco3" id="econo3" />
                <label for="econo3" class="rc_sty">Herrería y Aluminero</label>
				<br>

                <input type="checkbox" name="eco4" id="econo4" />
                <label for="econo4" class="rc_sty">Electricidad</label>
				<br>

                <input type="checkbox" name="eco5" id="econo5" />
                <label for="econo5" class="rc_sty">Gastronomía</label>
				<br>


                <input type="checkbox" name="eco6" id="econo6" />
                <label for="econo6" class="rc_sty">Panadería</label>
				<br>

                <input type="checkbox" name="eco7" id="econo7" />
                <label for="econo7" class="rc_sty">Joyería y accesorios</label>
				<br>

                <input type="checkbox" name="eco8" id="econo8" />
                <label for="econo8" class="rc_sty">Agricultura urbana</label>
				<br>

                <input type="checkbox" name="eco9" id="econo9" />
                <label for="econo9" class="rc_sty">Bicimaquinas</label>
				<br>

                <input type="checkbox" name="eco10" id="econo10" />
                <label for="econo10" class="rc_sty">Estilismo</label>
					</div>
<div class="col-lg-4">
                <input type="checkbox" name="eco11" id="econo11" />
                <label for="econo11" class="rc_sty">Diseño de imagen y Cosmetología orgánica</label>
				<br>

                <input type="checkbox" name="eco12" id="econo12" />
                <label for="econo12" class="rc_sty">Codigo para mujeres</label>
				<br>

                <input type="checkbox" name="eco13" id="econo13" />
                <label for="econo13" class="rc_sty">Electrónica</label>
				<br>

                <input type="checkbox" name="eco14" id="econo14" />
                <label for="econo14" class="rc_sty">Cosecha de agua de lluvias</label>
				<br>

                <input type="checkbox" name="eco15" id="econo15" />
                <label for="econo15" class="rc_sty">Instalación y reparación de dispositivos Fotovotaícos</label>


                <input type="checkbox" name="eco16" id="econo16" />
                <label for="econo16" class="rc_sty">Textiles y diseño de modas</label>
				<br>

                <input type="checkbox" name="eco17" id="econo17" />
                <label for="econo17" class="rc_sty">Banquetes</label>
				<br>

                <input type="checkbox" name="eco18" id="econo18" />
                <label for="econo18" class="rc_sty">Fotografia de producto</label>
				<br>

                <input type="checkbox" name="eco19" id="econo19" />
                <label for="econo19" class="rc_sty">Logos e identidad de marca</label>
				<br>

                <input type="checkbox" name="eco20" id="econo20" />
                <label for="econo20" class="rc_sty">Calidad en el servicio</label>
				</div>

<div class="col-lg-4">
                <input type="checkbox" name="eco21" id="econo21" />
                <label for="econo21" class="rc_sty">Creación de cooperativas</label>
				<br>

                <input type="checkbox" name="eco22"  id="econo22" />
                <label for="econo22" class="rc_sty">Emprendedurismo</label>
				<br>

                <input type="checkbox" name="eco23" id="econo23" />
                <label for="econo23" class="rc_sty">Creación de micro-negocios</label>
				<br>

                <input type="checkbox" name="eco24" id="econo24" />
                <label for="econo24" class="rc_sty">Comercio digital</label>
				<br>

                <input type="checkbox" name="eco25" id="econo25" />
                <label for="econo25" class="rc_sty">Estrategias de venta</label>
				<br>

                <input type="checkbox" name="eco26" id="econo26" />
                <label for="econo26" class="rc_sty">Comercio justo</label>
				<br>

                <input type="checkbox" name="eco27" id="econo27" />
                <label for="econo27" class="rc_sty">Hospedaje</label>
				<br>

                <input type="checkbox" name="eco28" id="econo28" />
                <label for="econo28" class="rc_sty">Electrónica digital</label>
				<br>

                <input type="checkbox" name="eco29" id="econo29" />
                <label for="econo29" class="rc_sty">Distribución</label>
				<br>

                <input type="checkbox" name="eco30" id="econo30" />
                <label for="econo30" class="rc_sty">Desarrollo web, Desarrollo de apps</label>
				</div>
              </p>

            </div>
          </div>
        </div>
		</fieldset>


      <fieldset>
        <legend>PILARES</legend>
<?php if(isset($_COOKIE["comboadd"])):?>
<p class="alert alert-success">Combo Agregado exitosamente!</p>
<?php setcookie("comboadd",0,time()-1); endif; ?>
	   <div class="row">
<div class="col-md-6">
<form method="post" action="add.php?opt=all">
  <div class="form-group">
    <label for="name1">Alcaldia</label>
    <select id="country_id" class="form-control" name="country_id" required>
      <option value="">Selecciona</option>
<?php foreach($countries as $c):?>
      <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
<?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="name1">PILARES</label>
     <select id="state_id" class="form-control" name="state_id" required>
      <option value="">Selecciona</option>
   </select>
  </div>

	  <br>

	  <br>

	<div class="trans text-center">
	  <button type="submit" onclick="return message()"  class="btn btn-success btn-lg ">Enviar</button>
</div>
</fieldset>
  </div>
 </div>

</form>
<img src="img/form-img/cenefa.png">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/curpValidacion.js" charset="utf-8"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
    window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
</script>
<script>
  function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;

        return /\d/.test(String.fromCharCode(keynum));
        }

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#country_id").change(function(){
			$.get("get_states.php","country_id="+$("#country_id").val(),
                  function(data){
				$("#state_id").html(data);
				console.log(data);
			});
		});


	});
</script>

</body>
</html>
