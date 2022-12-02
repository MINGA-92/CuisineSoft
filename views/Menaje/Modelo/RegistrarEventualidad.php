<?php
 require_once "../php/Conexion.php";
 date_default_timezone_set("America/Bogota");
 echo "Hoy= ";
 echo date ("d-F-Y / h:i a");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/menu.js"></script>
  <script type="text/javascript" src="../js/menu.js"></script>

  <link rel="stylesheet" href="../css/estiloR.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/main.css" type="text/css"/>
 
  <title>Registrar Eventualidad</title>
</head>
<body>
<div id="bg">
		<div class="wrap">
			<!-- menu -->
			<div id="mainmenu">
				<ul id="menu">
          <li><a class="current" href="http://localhost/CuisinePHP/index.php">Inicio</a></li>
					<li><a href="http://localhost/CuisinePHP/views/Menaje/ConsultarMenaje.php">Menaje</a>
						<ul><li><a href="../Modelo/RegistrarMenaje.php">Registrar Menaje</a></li><li><a href="Modelo/RegistrarEventualidad.php">Registrar Eventualidad</a></li><li><a href="Modelo/ConsultaMenaje.php">Menaje Disponible</a></li></ul>
					</li>
          <li><a href="../Modelo/RegistrarMenaje.php">Registrar Menaje<span class="icon-dot"></span></a></li>
          <li><a href="../Modelo/RegistrarEventualidad.php">Registrar Eventualidad</a></li>
           <li><a href="../Error.php">Servicios </a></li>
					<li><a href="../Modelo/Contact.php"> Contactenos</a></li>
				</ul>
			</div>
    </div>
  </div>
			<!-- /menu -->

  <!--------------Header-------------->
  <header class="main-header">
    <div class="container container--flex">
      <div class="logo-container column--50">
        <h1 class="logo">CuisineSoft</h1>
      </div>
      <div class="main-header__contactInfo column column--50">
        <p class="main-header__contactInfo__phone">
          <span class="icon-phone">230 7045</span>
        </p>
        <p class="main-header__contactInfo__address">
          <span class="icon-location">Carrera 15 No 12-21 </span>
        </p>
      </div>
    </div>
  </header>
  <!-------------Banner------------->
  <section class="banner">
    <img src="../images/CEventualidad.jpg" alt="" class="banner__img">
    <div class="banner__content">¡Registra Cualquier Suceso Con Las Herramientas e Intrumentación Del Restaurante!</div>
  </section>
    <!---------------Nav--------------->
   <!--------------Main-------------->
  <main class="main">
    <section class="group group--color">
      <div class="container">
        <h2 class="main__title">Registro De Eventualidad Con Menaje</h2>
        </div>
    </section>
    <section class="group main__about__description">
      <div class="container container--flex">
        <form action="../Controlador/GuardarEvento.php" method= "POST" class="formulario">
          <h2 class="form__title">Formulario Eventualidad</h2>

       <div class="c-l-i d-50">
       <label for="evento_idevento">Elije El Tipo De Eventualidad = </label>
          <select name="TipoEvento" for="evento_idevento" id="TipoEvento">
           <option value="1">Desgaste</option>
           <option value="2">Daño Parcial</option>
           <option value="3">Daño Total</option>
        </select>
       </div>
          <div class="c-l-i d-50">
              <label for="fechaRegistro">Fecha De Registro</label>
              <input type="date" name="fechaRegistro" id="fechaRegistro" value="<?php date_default_timezone_set("America/Bogota");
              echo date ("d-m-Y");?>">
        </div>
          <div class="c-l-i d-50">
              <label for="fecha_eventualidad">Fecha Del Suceso</label>
              <input type="date" name="fechaSuceso" id="fechaSuceso">
          </div>
        <div class="c-l-i d-50">
              <label for="Cantidad_Involucrados">Cantidad De Elementos Involucrados</label>
              <input type="number" name="cantidadElementos" id="cantidadElementos" placeholder="Cantidad">
          </div>
          <div class="c-l-i d-50">
          <label for="menaje_idmenaje">Elige Id Menaje=</label>
        <select name="idMenaje" for="menaje_idmenaje" id="idMenaje">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
        </select>
       </div>
          <div class="c-l-i d-50">
          <label for="fecha_eventualidad">¿No Recuerdas El Id Del Menaje?</label>
          <a href="../Modelo/ConsultaMenaje.php" class="btnRegistrar">Consultar Menaje</a>
          </div>
          <div class="c-l-i d-50">
          <label for="">¿El Elemento Aun Funciona? </label>
          <select name="" for="" id="">
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">Por Unos Dias</option>
          </select>
          <div class="c-l-i d-50">
          <label for="">Elige IdRestaurante </label>
          <select name="IdRestaurante" for="" id="IdRestaurante">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
          </select>
          </div>
          </div>
          <div class="c-l-i">
              <label for="Descripcion">Añada Una Descripción Detallada Del Evento</label>
              <textarea class="areaT" name="Descripcion" id="Descripcion" cols="30" rows="10" placeholder="Descripción Detallada"></textarea>
          </div>

      <input type="submit" value="Registrar Eventualidad" class="btnRegistrar">
      </form>
   </div>
 </section>
    <!---------------------------------->
  </main>
  <footer class="main-footer">
    <div class="container container--flex">
          <div class="column column--33">
            <h2 class="column__title">¿Por Que Visitarnos?</h2>
            <p class="column__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem accusantium eum veniam, perspiciatis quaerat possimus ex. Quisquam officia repudiandae dignissimos illo, accusamus voluptas animi sequi explicabo sunt eum facilis vero!</p>
          </div>
          <div class="column column--33">
              <h2 class="column__title">Contactanos</h2>
              <p class="column__txt">Direccion</p>
              <p class="column__txt">Teléfono</p>
              <p class="column__txt">Correo</p>
          </div>
          <div class="column column--33">
              <h2 class="column__title">Siguenos En Redes Sociales</h2>
              <p class="column__txt"><a href="" class="icon-facebook">Siguenos en Facebook</a></p>
              <p class="column__txt"><a href="" class="icon-twitter">Siguenos en Twitter</a></p><p class="column__txt"><a href="" class="icon-youtube">Siguenos en Youtube</a></p>
          </div>
          <p class="copy">&copy; 2019 CuisineSoft | Todos los derrechos reservados</p>
        </div>
  </footer>
</body>
</html>