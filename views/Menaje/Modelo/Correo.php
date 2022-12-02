<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link rel="stylesheet" href="../css/estiloR.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/main.css" type="text/css"/>
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
        <p class="main-header__contactInfo__address">
          <span class="icon-location">Carrera 15 No 12-21 </span>
        </p>
      </div>
    </div>
  </header>
  <!-------------Banner------------->
  <section class="banner">
    <img src="../images/icons.jpg" alt="" class="banner__img">
    <div class="banner__content"> <h2 class="main__title">¡Formulario Para El Envio De Correos!</h2> </div>
  </section>
    <section class="main-footer">
    <section class="group group--color">
      <div class="container">
        <h2 class="main__title">Envia Tu Correo</h2>
        </div>
    </section>
      <div class="container container--flex">
          <form action="../Controlador/EnviarCorreo.php" method= "POST" class="correoForm">
          <h2 class="form__title">Envio De Email</h2>
          <div class="c-l-i d-50">
              <label class="correoInput">Ingresa Tu Nombre= *</label>
              <input class="correoInput" type="text" name="Nombre" id="Nombre" placeholder="Nombre *">
          </div>
          <div class="c-l-i d-50">
              <label class="correoInput">Asunto= *</label>
              <input class="correoInput" type="text" name="Asunto" placeholder="Asunto *">
          </div>
          <div class="c-l-i">
              <label class="correoInput">Ingresa Email= *</label>
              <input class="correoInput" type="text" name="email" id="email" placeholder="Ingresa El Correo De Destino *">
          </div>
          <div class="c-l-i">
              <label class="correoInput">Mensaje= *</label>
              <input class="correoInput" type="text" name="Mensaje"  placeholder="Escribe Tu Mensaje *">
          </div>
          <input class="btnRegistrar" type="submit" name="enviar">
          </form>
      </div>
        <div class="main-footer">
            <a href="../index.php" class="btnRegistrar">Volver Al Inicio</a>
         </div>
    </section>
    <?php
    include("../Controlador/EnviarCorreo.php");
    ?>
</body>
</html>