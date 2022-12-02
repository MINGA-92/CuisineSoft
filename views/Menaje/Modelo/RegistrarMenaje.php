<?php
require_once "../php/Conexion.php";
date_default_timezone_set("America/Bogota");
echo "Hoy= ";
echo date ("d-Y-F / h:i a");
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
 
  <title>Registrar Menaje</title>
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
    <img src="../images/bannerCMenaje.jpg" alt="" class="banner__img">
    <div class="banner__content">Ten Un Control Rápido y Exacto De Todas Las Herramientas e Instrumentación Del Restaurante</div>
  </section>
    <!---------------Nav--------------->
   
  <!--------------Main-------------->
  <main class="main">
    <section class="group group--color">
      <div class="container">
        <h2 class="main__title">Registro De Menaje</h2>
        </div>
    </section>
    <section class="group main__about__description">
      <div class="container container--flex">
        <form action="../Controlador/GuardarMenaje.php" method= "POST" class="formulario">
          <h2 class="form__title">Formulario Menaje</h2>
          <div class="c-l-i d-50">
              <label for="fecha">Fecha De Registro</label>
              <input type="date" name="fecha" id="fecha">
          </div>
          <div class="c-l-i">
              <label for="Elemento">Nombre Elemento</label>
              <input type="text" name="Menaje" id="Menaje" placeholder="Nombre Del Menaje">
          </div>
          <div class="c-l-i d-50">
              <label for="cantidad">Cantidad</label>
              <input type="text" name="Cantidad" id="Cantidad" placeholder="Cantidad De Elemetos Nuevos">
          </div>
          <div class="c-l-i d-50">
              <label for="VidaUtil">Estimado De Vida Util</label>
              <input type="date" name="Vida_Util" id="Vida Util">
              <cal_days_in_month >
          </div>
          <input type="submit" value="Registrar" class="btnRegistrar" >
          <a href="../Modelo/ConsultaMenaje.php" class="btnRegistrar">Consultar Menaje</a>
          </form>
      </div>
    </section>
  </main>
  <!---------------------------------->
  <footer class="main-footer">
    <div class="container container--flex">
          <div class="column column--33">
            <h2 class="column__title">¿ Por que Visitarnos ?</h2>
            <p class="column__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem accusantium eum veniam, perspiciatis quaerat possimus ex. Quisquam officia repudiandae dignissimos illo, accusamus voluptas animi sequi explicabo sunt eum facilis vero!</p>
          </div>
          <div class="column column--33">
              <h2 class="column__title">Contactanos</h2>
              <p class="column__txt">Direccion</p>
              <p class="column__txt">Teléfono</p>
              <p class="column__txt">Correo</p>
          </div>
          <div class="column column--33">
              <h2 class="column__title">Siguenos en redes sociales</h2>
              <p class="column__txt"><a href="" class="icon-facebook">Siguenos en Facebook</a></p>
              <p class="column__txt"><a href="" class="icon-twitter">Siguenos en Twitter</a></p><p class="column__txt"><a href="" class="icon-youtube">Siguenos en Youtube</a></p>
          </div>
          <p class="copy">&copy; 2019 CuisineSoft | Todos los derrechos reservados</p>
        </div>
  </footer>
</body>
</html>