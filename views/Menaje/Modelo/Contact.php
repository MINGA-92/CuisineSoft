<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>

    <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Arial.font.js"></script>
	<script type="text/javascript">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/fancyzoom.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('div.photo a').fancyZoom({directory: 'images/zoom', scaleImg: true, closeOnClick: true});
		});
	</script>
    <link rel="stylesheet" href="../css/estiloR.css">
    <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
<?php
date_default_timezone_set("America/Bogota");
 echo "<h1>Contactanos Hoy= </h1>";
 echo date ("l-d-Y-F / h:i a");?>

<div class="error mx-auto" data-text="CuisineSoft ">CuisineSoft</div>
    <div class="main-footer">
    <a href="http://localhost/CuisinePHP/index.php" class="btnRegistrar">Volver Al Inicio</a>
    <a href="../Modelo/Correo.php" class="btnRegistrar">Enviar Correo</a>
    </div>
<section class="download bg-primary text-center" id="download">
<div class="container">
<li><a class="current" href="../index.php"></a></li>
<div class="main-footer">
<h2 class="section-heading">El Mejor Asistente Para Tu Restaurante </h2>
</div>
<!-- Begin Page Content -->
<li><a class="current" href="../index.php"></a></li>
<footer class="main-footer">
    <div class="container container--flex">
        <div class="column column--33">
          <h2 class="column__title">¿Por que Visitarnos?</h2>
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
</div>
    <div class="row">
      <div class="col-md-8 mx-auto">
      <div class="main-footer">
      <p>Nuestra aplicación está disponible en cualquier dispositivo móvil! ¡Descárgalo ahora para empezar!</p>
          </div>
          <div class="badges">
            <a class="badge-link" href="#"><img src="../images/google-play-badge.svg" alt=""></a>
            <a class="badge-link" href="#"><img src="../images/app-store-badge.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>  
  </body>
</html>