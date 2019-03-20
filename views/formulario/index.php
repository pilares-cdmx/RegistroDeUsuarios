 <?php
 // require_once  'views/headerFormulario.php'
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
     
    
     
     <!-- Bootstrap CSS -->
     
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php //echo constant('URL')?>../../public/css/estilosFormularios.css">
     
     <linck rel="stylesheet" type="text/css" href="public/css/estilosFormularios.css"/>
     
   <title>Formulario de registro</title>
     
    <link rel="icon" href="public/img/core-img/favicon.ico">


     
     
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="<?php //echo constant('URL')?>../../public/css/jquery-ui.css" />
 	<link rel="stylesheet" href="<?php //echo constant('URL')?>../../public/css/estiloFormulario.css" />
   <script src="<?php //echo constant('URL')?>../../public/js/jquery-1.8.2.js"></script>
   <script src="<?php //echo constant('URL')?>../../public/js/jquery-ui.js"></script>

<script language="JavaScript"> 
if(window.screen.availWidth == 1920)window.parent.document.body.style.zoom="140%"
if(window.screen.availWidth == 1280)window.parent.document.body.style.zoom="120%" 
if(window.screen.availWidth == 1152)window.parent.document.body.style.zoom="108%" 
if(window.screen.availWidth == 1024)window.parent.document.body.style.zoom="96%" 
if(window.screen.availWidth == 800)window.parent.document.body.style.zoom="75%"; 
if(window.screen.availWidth == 640)window.parent.document.body.style.zoom="60%" 
</script>
     
     
 </head>
 <body>
  <img src="<?php ////echo constant('URL')?>../../public/img/blog-img/cenefa4.png" <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
          <h1><center>FORMULARIO DE REGISTRO</center></h1>
      </div>
    </div>
  </div><br>
  <form action="<?php //echo constant('URL');?>formulario/registrarUsuario" method="POST">

    <div class="container">
      <fieldset>
        <legend>DATOS PERSONALES</legend>
        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="nombre">Nombre(s)</label><br>
            <input id="nombre" type="text" class="validate" name="nombreuser" style="text-transform:uppercase;" size="40" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="ap_pat">Apellido paterno</label><br>
            <input id="ap_pat" type="text" class="validate" name="apellidopat" style="text-transform:uppercase;" size="40" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="ap_mat">Apellido materno</label><br>
            <input id="ap_mat" type="text" class="validate" name="apellidomat" style="text-transform:uppercase;" size="40" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="curp" class="active ">CURP</label><br>
            <input required maxlength="18" id="curp" name="curp" type="text" class="validate" oninput="validarInput(this)" style="text-transform:uppercase;" maxlength="18" size="40" required>
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
              <option value="18">Ninguno</option>
              <option value="19">Otro</option>
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

            <label for="nombre">Alcaldia </label><br>
            <!--id "alcaldia" corresponde a Alcaldias-->
            <select name="alcaldia" id="alcaldia">
              <option value="">Selecciona</option>
                      <?php
                      /*
                         foreach ($this->alcaldias as $a)
                         {
                         echo '<option value="'.$a->Id.'">'.$a->Pais.'</option>';
                         }
                         */
                       ?>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-30 estilo-forma">

            <label for="nombre">Colonia </label><br>
              <!--id "estados" corresponde a Colonia-->
            <select name="colonia" id="colonia" required>
              <option value="">Selecciona</option>
            </select>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="nombre">Código postal </label><br>
            <!--id "municipio" corresponde a Codigo postal-->
            <select name="codigoPostal" id="codigoPostal" required>
              <option value="">Selecciona</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="nombre">Calle y número</label><br>
            <input id="nombre" type="text" class="validate" name="calleNumero" style="text-transform:uppercase;" size="40" required>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="numrec">Tiempo de residencia en CDMX</label><br>
            <input onkeypress="return justNumbers(event);" maxlength="3" id="timepoResidencia" type="text" class="validate" name="timepoResidencia" size="40">
            <small id="residenciaHelp" class="form-text text-muted">Tiempo en años</small>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="telCasa" <input type="number">Teléfono de casa</label><br>
            <input onkeypress="return justNumbers(event);" maxlength="12" id="telCasa" type="text" class="validate" name="telCasa" size="40" >
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label for="telMovil" <input type="number">Teléfono celular</label><br>
            <input onkeypress="return justNumbers(event);" maxlength="12" id="telMovil" type="text" name="telMovil" class="validate" size="40">
          </div>
        </div>
      
<div class="row">
        <div class="col-lg-12 col-md-12 estilo-forma">
          <label for="correo">Correo</label><br>
          <input type="correo" class="validate" name="email" id="correo" aria-describedby="emailHelp" size="40" required>
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
              <!--Se modifico el name de los radio buttons. ahora tienen
                el mismo nombre para darles la propiedad "group"-->
              <input name="estudias" type="radio" id="4" value="4">
              <label for="4" class="rc_sty">Si</label>
              <input name="estudias" type="radio" id="5" value="5">
              <label for="5" class="rc_sty">No</label>
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label>Último grado de estudios</label><br>
            <select name="grado" >
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

            <select name="ocupacionAct">
              <option value="0" disabled selected>Selecciona</option>
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
          <div class="col-lg-12 estilo-forma">
              <label class="h3"><h3>Cultura</h3></label>
              <div class="row">
                <div class="col-lg-4">
                  <label>Artes escénicas</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check1" id="cul1" />
                    <label for="cul1" class="rc_sty" value="Danza">Danza</label><br>
                    <input type="checkbox" name="check2" id="cul2" />
                    <label for="cul2" class="rc_sty" value="BaileSocial">Baile Social</label><br>
                    <input type="checkbox" name="check3" id="cul3" />
                    <label for="cul3" class="rc_sty" value="DanzaNiños">Danza para niños</label><br>
                    <input type="checkbox" name="check4" id="cul4" />
                    <label for="cul4" class="rc_sty" value="DanzaAdultos">Danza para adultos</label><br>
                    <input type="checkbox" name="check5" id="cul5" />
                    <label for="cul5" class="rc_sty" value="DanzaFolklorica">Danza folklórica</label> <br>
                    <input type="checkbox" name="check6" id="cul6" />
                    <label for="cul6" class="rc_sty" value="Ballet">Ballet</label><br>
                    <input type="checkbox" name="check7" id="cul7" />
                    <label for="cul7" class="rc_sty" value="Actuación">Actuación</label><br>
                    <input type="checkbox" name="check8" id="cul8" />
                    <label for="cul8" class="rc_sty" value="TeatroCalle">Teatro de calle</label><br>
                    <input type="checkbox" name="check9" id="cul9" />
                    <label for="cul9" class="rc_sty" value="DanzaContemporánea">Danza contemporánea</label><br>
                    <input type="checkbox" name="check10" id="cul10" />
                    <label for="cul10" class="rc_sty" value="DanzaPolinesia">Danza polinesia</label> <br>
                    <input type="checkbox" name="check11" id="cul11" />
                    <label for="cul11" class="rc_sty" value="TeatroMascaras">Teatro de máscaras</label><br>
                    <input type="checkbox" name="check12" id="cul12" />
                    <label for="cul12" class="rc_sty" value="ExpresiónCorporal">Expresión corporal y teatro</label> <br>
                  </div>
                </div>
                <div class="col-lg-4">
                  <label>Oficios</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check13" id="cul13" />
                    <label for="cul13" class="rc_sty" value="TelarCintura">Telar de cintura</label><br>
                    <input type="checkbox" name="check14" id="cul14" />
                    <label for="cul14" class="rc_sty" value="Cartoneria">Cartonería</label><br>
                    <input type="checkbox" name="check15" id="cul15" />
                    <label for="cul15" class="rc_sty" value="BordadoVida">Bordado para la vida</label><br>
                    <input type="checkbox" name="check16" id="cul16" />
                    <label for="cul16" class="rc_sty" value="Encuadernacion">Encuadernación</label><br>
                    <input type="checkbox" name="check17" id="cul17" />
                    <label for="cul17" class="rc_sty" value="ConstruccionInstrumentos">Construcción artesanal de instrumentos</label>
                    <input type="checkbox" name="check18" id="cul18" />
                    <label for="cul18" class="rc_sty" value="DiseñoJuguetesMaderaReuso">Diseño de juguetes de madera y materiales de reuso</label>
                    <br>
                  </div>
                  <label>Artes sustentables</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check19" id="cul19" />
                    <label for="cul9" class="rc_sty" value="ReciclajeAmbiente">Reciclaje y medio ambiente</label><br>
                  </div>
                  <label>Literatura</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check20" id="cul20" />
                    <label for="cul20" class="rc_sty" value="EscrituraCreativa">Escritura creativa</label><br>
                  </div>
                  <label>Artes plásticas</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check21" id="cul21" />
                    <label for="cul21" class="rc_sty" value="PinturaArtistica">Pintura artística</label><br>
                  </div>
                </div>
                <div class="col-lg-4">
                  <label>Artes Visuales</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check22" id="cul22" />
                    <label for="cul22" class="rc_sty" value="MediosAudiovisuales">Medios Audiovisuales</label><br>
                    <input type="checkbox" name="check23" id="cul23" />
                    <label for="cul23" class="rc_sty" value="Cine">Cine</label><br>
                    <input type="checkbox" name="check24" id="cul24" />
                    <label for="cul24" class="rc_sty" value="Fotografia">Fotografía</label><br>
                    <input type="checkbox" name="check25" id="cul25" />
                    <label for="cul25" class="rc_sty" value="AnimacionNiños">Animación para niños</label><br>
                    <input type="checkbox" name="check26" id="cul26" />
                    <label for="cul26" class="rc_sty" value="VideoComunitario">Vídeo comunitario</label> <br>
                  </div>
                  <label>Música</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check27" id="cul27" />
                    <label for="cul27" class="rc_sty" value="GuitarraClasica">Guitarra clásica</label><br>
                    <input type="checkbox" name="check28" id="cul28" />
                    <label for="cul28" class="rc_sty" value="Rap">Música Rap</label><br>
                    <input type="checkbox" name="check29" id="cul29" />
                    <label for="cul29" class="rc_sty" value="Percusiones">Percusiones</label><br>
                    <input type="checkbox" name="check30" id="cul30" />
                    <label for="cul30" class="rc_sty" value="IniciacionMusica">Iniciación a la música</label><br>
                    <input type="checkbox" name="check31" id="cul31" />
                    <label for="cul31" class="rc_sty" value="SonHuasteco">Son Huasteco</label> <br>
                  </div>
                </div>
              </div>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 estilo-forma">
            <label class="h3">Deporte</label><br>
              <div class="row">
                <div class="col-lg-4">
                  <label>Escuela técnico deportivas de:</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check32" id="dep1" />
                    <label for="dep1" class="rc_sty" value="Fútbol">Fútbol</label><br>
                    <input type="checkbox" name="check33" id="dep2" />
                    <label for="dep2" class="rc_sty" value="Basquetbol">Basquetbol</label><br>
                    <input type="checkbox" name="check34" id="dep3" />
                    <label for="dep3" class="rc_sty" value="Voleibol">Voleibol</label><br>
                  </div>
                </div>
                <div class="col-lg-4">
                  <label>Activación Física</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check36" id="dep4" />
                    <label for="dep4" class="rc_sty" value="AcondicionamientoFisico">Acondicionamiento físico</label><br>
                    <input type="checkbox" name="check37" id="dep5" />
                    <label for="dep5" class="rc_sty" value="Zumba">Zumba</label><br>
                    <input type="checkbox" name="check38" id="dep6" />
                    <label for="dep6" class="rc_sty" value="TaeBo">Tae bo</label><br>
                    <input type="checkbox" name="check39" id="dep7" />
                    <label for="dep7" class="rc_sty" value="Yoga">Yoga</label><br>
                    <input type="checkbox" name="check40" id="dep8" />
                    <label for="dep8" class="rc_sty" value="TaiChi">Tai chi</label>
                    <br>
                  </div>
                </div>
                <div class="col-lg-4">
                  <label>Otras disciplinas</label>
                  <div class="checkbox">
                    <input type="checkbox" name="check41" id="dep9" />
                    <label for="dep9" class="rc_sty" value="Boxeo">Boxeo</label><br>
                    <input type="checkbox" name="check42" id="dep10" />
                    <label for="dep10" class="rc_sty" value="Atletismo">Atletismo</label><br>
                    <input type="checkbox" name="check43" id="dep11" />
                    <label for="dep11" class="rc_sty" value="KarateDo">Karate do</label><br>
                    <input type="checkbox" name="check44" id="dep12" />
                    <label for="dep12" class="rc_sty" value="KunFu">Kun fu</label>
                      
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label class="h3">Ciberescuela</label><br><BR>
            <select name="opcionEdu">
              <option value="0" disabled selected>Opción</option>
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
          <div class="col-lg-12 estilo-forma">
            <label>Talleres de habilidades cognitivas</label><br>
            <div class="checkbox">
              <div class="row">

              </div>
              <input type="checkbox" name="check45" id="cog1" />
              <label for="cog1" class="rc_sty">Ajedrez</label>
              <input type="checkbox" name="check46" id="cog2" />
              <label for="cog2" class="rc_sty">Redacción y comprensión de lectura</label>
            </div>
          </div>
        </div>
        
            
            
            <div class="row">
          <div class="col-lg-12 estilo-forma">
            <label>Talleres de habilidades digitales</label><br>
            <div class="checkbox">
              <div class="row">
                <div class="col-lg-4">
                  <input type="checkbox" name="check47" id="dig1" />
                  <label for="dig1" class="rc_sty">Club de Ciencias</label><br>
                  <input type="checkbox" name="check48" id="dig2" />
                  <label for="dig2" class="rc_sty">Club de Código</label><br>
             
                 
                </div>
                <div class="col-lg-4">
                  <input type="checkbox" name="check49" id="dig3" />
                  <label for="dig3" class="rc_sty">Edición y diseño</label>
                  <br>
                  <input type="checkbox" name="check50" id="dig4" />
                  <label for="dig4" class="rc_sty">Talleres de cómputo</label> <br>
                  
                </div>
                  <div class="col-lg-4">
                  <input type="checkbox" name="check51" id="dig5" />
                  <label for="dig5" class="rc_sty">Robótica aplicada</label>
                  
                </div>
                  
                </div>
            
                
              </div>
            </div>
          </div>   
        <div class="row">
          <div class="col-lg-12 estilo-forma">
            <label>Talleres de habilidades emocionales</label><br>
            <div class="checkbox">
              <div class="row">
                <div class="col-lg-4">
                  <input type="checkbox" name="check52" id="emo1" />
                  <label for="emo1" class="rc_sty">Amor y sexualidad</label><br>
                  <input type="checkbox" name="check53" id="emo2" />
                  <label for="emo2" class="rc_sty">Prevención de adicciones</label><br>
                  <input type="checkbox" name="check54" id="emo3" />
                  <label for="emo3" class="rc_sty">Habilidades para la vida</label> <br>
                    <input type="checkbox" name="check55" id="emo4" />
                  <label for="emo4" class="rc_sty">Baile, cuerpo y emociones</label>
                </div>
                <div class="col-lg-4">
                  <input type="checkbox" name="check56" id="emo5" />
                  <label for="emo5" class="rc_sty">Proyecto de vida</label>
                  <br>
                  <input type="checkbox" name="check57" id="emo6" />
                  <label for="emo6" class="rc_sty">Autoestima</label> <br>
                  <input type="checkbox" name="check58" id="emo7" />
                  <label for="emo7" class="rc_sty">Tanatología o manejo del duelo</label>
                <input type="checkbox" name="check59" id="emo8" />
                  <label for="emo8" class="rc_sty">Emociones mágicas</label>
                  <br>
                </div>
                  <div class="col-lg-4">
                  <input type="checkbox" name="check60" id="emo9" />
                  <label for="emo9" class="rc_sty">Inteligencia emocional</label>
                  <br>
                  <input type="checkbox" name="check61" id="emo10" />
                  <label for="emo10" class="rc_sty">Arte y Emociones</label> <br>
                  <input type="checkbox" name="check62" id="emo11" />
                  <label for="emo11" class="rc_sty">Pintando emociones</label>
                  <br>
                </div>
                  
                </div>
            
                <br>
              </div>
            </div>
          </div>
     
        <div class="row">
          <div class="col-lg-12 col-md-12 estilo-forma">
            <label class="h3">Talleres de autonomía económica</label><br>
            <div class="checkbox">
              <div class="row">
                <div class="col-lg-4">
                  <input type="checkbox" name="check63" id="econo1" />
                  <label for="econo1" class="rc_sty">Carpintería</label> <br>

                  <input type="checkbox" name="check64" id="econo2" />
                  <label for="econo2" class="rc_sty">Plomería</label><br>

                  <input type="checkbox" name="check65" id="econo3" />
                  <label for="econo3" class="rc_sty">Herrería y Aluminero</label> <br>

                  <input type="checkbox" name="check66" id="econo4" />
                  <label for="econo4" class="rc_sty">Electricidad</label> <br>

                  <input type="checkbox" name="check67" id="econo5" />
                  <label for="econo5" class="rc_sty">Gastronomía</label> <br>


                  <input type="checkbox" name="check68" id="econo6" />
                  <label for="econo6" class="rc_sty">Panadería</label><br>

                  <input type="checkbox" name="check69" id="econo7" />
                  <label for="econo7" class="rc_sty">Joyería y accesorios</label> <br>

                  <input type="checkbox" name="check70" id="econo8" />
                  <label for="econo8" class="rc_sty">Agricultura urbana</label> <br>

                  <input type="checkbox" name="check71" id="econo9" />
                  <label for="econo9" class="rc_sty">Bicimaquinas</label> <br>

                  <input type="checkbox" name="check72" id="econo10" />
                  <label for="econo10" class="rc_sty">Estilismo</label>
                </div>
                <div class="col-lg-4">
                  <input type="checkbox" name="check73" id="econo11" />
                  <label for="econo11" class="rc_sty">Diseño de imagen y Cosmetología orgánica</label>
                  <br>

                  <input type="checkbox" name="check74" id="econo12" />
                  <label for="econo12" class="rc_sty">Codigo para mujeres</label>
                  <br>

                  <input type="checkbox" name="check75" id="econo13" />
                  <label for="econo13" class="rc_sty">Electrónica</label>
                  <br>

                  <input type="checkbox" name="check76" id="econo14" />
                  <label for="econo14" class="rc_sty">Cosecha de agua de lluvias</label>
                  <br>

                  <input type="checkbox" name="check77" id="econo15" />
                  <label for="econo15" class="rc_sty">Instalación y reparación de dispositivos Fotovotaícos</label>


                  <input type="checkbox" name="check78" id="econo16" />
                  <label for="econo16" class="rc_sty">Textiles y diseño de modas</label>
                  <br>

                  <input type="checkbox" name="check79" id="econo17" />
                  <label for="econo17" class="rc_sty">Banquetes</label>
                  <br>

                  <input type="checkbox" name="check80" id="econo18" />
                  <label for="econo18" class="rc_sty">Fotografia de producto</label>
                  <br>

                  <input type="checkbox" name="check81" id="econo19" />
                  <label for="econo19" class="rc_sty">Logos e identidad de marca</label>
                  <br>

                  <input type="checkbox" name="check82" id="econo20" />
                  <label for="econo20" class="rc_sty">Calidad en el servicio</label>
                </div>

                <div class="col-lg-4">
                  <input type="checkbox" name="check83" id="econo21" />
                  <label for="econo21" class="rc_sty">Creación de cooperativas</label>
                  <br>

                  <input type="checkbox" name="check84" id="econo22" />
                  <label for="econo22" class="rc_sty">Emprendedurismo</label>
                  <br>

                  <input type="checkbox" name="check85" id="econo23" />
                  <label for="econo23" class="rc_sty">Creación de micro-negocios</label>
                  <br>

                  <input type="checkbox" name="check86" id="econo24" />
                  <label for="econo24" class="rc_sty">Comercio digital</label>
                  <br>

                  <input type="checkbox" name="check87" id="econo25" />
                  <label for="econo25" class="rc_sty">Estrategias de venta</label>
                  <br>

                  <input type="checkbox" name="check88" id="econo26" />
                  <label for="econo26" class="rc_sty">Comercio justo</label>
                  <br>

                  <input type="checkbox" name="check89" id="econo27" />
                  <label for="econo27" class="rc_sty">Hospedaje</label>
                  <br>

                  <input type="checkbox" name="check90" id="econo28" />
                  <label for="econo28" class="rc_sty">Electrónica digital</label>
                  <br>

                  <input type="checkbox" name="check91" id="econo29" />
                  <label for="econo29" class="rc_sty">Distribución</label>
                  <br>

                  <input type="checkbox" name="check92" id="econo30" />
                  <label for="econo30" class="rc_sty">Desarrollo web, Desarrollo de apps</label>
                </div>


              </div>
            </div>
          </div>
        </div>
     </fieldset>


      <fieldset>
        <legend>PILARES</legend>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name1">Alcaldia</label>
              <select id="country_id" class="form-control" name="country_id" required>
                <option value="">Selecciona</option>
                <?php
                /*
                       foreach ($this->alcaldias as $a)
                       {
                       echo '<option value="'.$a->Id.'">'.$a->Pais.'</option>';

                       }
                */
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name1">PILARES</label>
              <select id="pilarSelect_id" class="form-control" name="pilarSelect_id" required>
                <option value="">Selecciona</option>
              </select>
            </div> <br><br>
          </div>
        </div>
        <div class="text-center m-auto btn-block">
          <button type="submit" onclick="return message()" class="btn btn-success btn-lg px-5">Enviar</button>
        </div>
      </fieldset>

    </div>
  </form>
  <img src="<?php //echo constant('URL')?>../../public/img/form-img/cenefa.png">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php //echo constant('URL')?>../../public/js/curpValidacion.js" charset="utf-8"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script type="text/javascript">
    window.addEventListener('keydown', function(e) {
      if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
        if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
          e.preventDefault();
          return false;
        }
      }
    }, true);
  </script>
  <script>
    function justNumbers(e) {
      var keynum = window.event ? window.event.keyCode : e.which;
      if ((keynum == 8) || (keynum == 46))
        return true;

      return /\d/.test(String.fromCharCode(keynum));
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#country_id").change(function() {
        var id = document.getElementById("country_id").value;
        $.ajax({
          url: "http://localhost/webformulario/formulario/getPilares",
          type: 'GET',
          dataType: "json",
          data: {
            id: id
          },
          success: function(json) {
            $.each(json, function(i, estado) {
              $("#state_id").append('<option value=' + estado.id + '>' + estado.name + '</option>');
            });
          },
          error: function(xhr, status) {
            console.log(id);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#pais").change(function() {
        var id = document.getElementById("pais").value;
        $.ajax({
          url: "http://localhost/webformulario/formulario/getColonias",
          type: 'GET',
          dataType: "json",
          data: {
            id: id
          },
          success: function(json) {
            $.each(json, function(i, resultado) {
              $("#estados").append('<option value=' + resultado.id + '>' + resultado.nombre + '</option>');
            });
          },
          error: function(xhr, status) {
            console.log(id);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#estados").change(function() {
        var id = document.getElementById("estados").value;
        $.ajax({
          url: "http://localhost/webformulario/formulario/getMunicipios",
          type: 'GET',
          dataType: "json",
          data: {
            id: id
          },
          success: function(json) {
            $.each(json, function(i, resultado) {
              $("#municipio").append('<option value=' + resultado.id + '>' + resultado.nombre + '</option>');
            });
          },
          error: function(xhr, status) {
            console.log(id);
          }
        });
      });
    });
  </script>
     
     <style>
div {
 
  padding-top: 10px;
  padding-right: 10px;
  padding-left: 15px;
}
</style>
     
</body>

</html>
