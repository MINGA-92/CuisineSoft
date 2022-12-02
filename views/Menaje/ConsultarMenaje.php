<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/menu.js"></script>
  <script type="text/javascript" src="../js/menu.js"></script>

  <title>Consultar Menaje</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="../Menaje/css/fonts.css">
  <link rel="stylesheet" href="../Menaje/css/main.css" type="text/css"/>
  <link rel="stylesheet" href="../Menaje/css/estiloR.css">
  <link href="../Menaje/css/sb-admin-2.min.css" rel="stylesheet">
 

</head>
<body>
<div id="bg">
		<div class="wrap">
			<!-- menu -->
			<div id="mainmenu">
      <ul id="menu">
          <li><a class="current" href="http://localhost/CuisinePHP/index.php">Inicio</a></li>
          <li><a href="../Menaje/Modelo/RegistrarMenaje.php">Registrar Menaje<span class="icon-dot"></span></a></li>
          <li><a href="../Menaje/Modelo/RegistrarEventualidad.php">Registrar Eventualidad</a></li>
          <li><a href="../Menaje/Error.php"> Servicios </a></li>
					<li><a href="../Menaje/Modelo/Contact.php"> Contactenos</a></li>
				</ul>
			</div>
   </div>
</div>
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
    <img src="../Menaje/images/huincha-menaje.jpg" alt="" class="banner__img">
    <div class="banner__content"> Control Exácto y Rápido De Todas Las Herramientas e Intrumentación Del Restaurante</div>
  </section>
<!-- barra Search -->
<section class="fontt">
   <section class="group group--color">
      <div class="container">
      <h1 class="main__title"> Menaje Disponible </h1>
        </div>
        </section>
    <form action="../Menaje/Controlador/Buscar.php" method="POST" autocomplete="off">
            <div class="input-group">
              <input type="text" name="palabra" class="form-control bg-light border-0 small" placeholder=" Buscar Menaje..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" value="Buscar" class="btn btn-primary" iconv="ui-icon-zoomin">
              </button>
              </div>
            </div>
        </form>
        <?php
           if(isset($_POST['palabra'])){
             require_once "../Menaje/php/Conexion.php";
             require_once "../Menaje/php/Controlador/Buscar.php";
           }
        ?>
</section>
<form>
<h3>Menaje Disponible </h3>
<div class="table thead td">
</form>
<table>
 <thead>
 <tr>
 <th> Id Menaje </th>
 <th> Fecha De Registro </th>
 <th> Nombre Menaje </th>
 <th> Cantidad </th>
 <th> Vida Util </th>
 <th> Actualizar </th>
 <th> Eliminar </th>
 </tr>
 </thead>
 <tbody>
 <?php
 require_once "../Menaje/php/Conexion.php";
 $query="SELECT*FROM menaje";
 $Consulta1=consultarSql($query);
 while ($fila=$Consulta1->fetch_array(MYSQLI_NUM)){
   echo "
   <tr>
   <td>".$fila[0]."</td>
   <td>".$fila[1]."</td>
   <td>".$fila[2]."</td>
   <td>".$fila[3]."</td>
   <td>".$fila[4]."</td>
   <td><a href='../Menaje/Modelo/ActualizarMenaje.php?idmenaje=$fila[0]'> Editar</td>
   <td><a href='../Menaje/Controlador/EliminarMenaje.php?idmenaje=$fila[0]'> Borrar</td>
   </tr>
   ";
 }
 date_default_timezone_set("America/Bogota");
 echo date ("d-F-Y / h:i a");
 ?>
 </tbody>
 </table>
 <form>
   <a href="../Menaje/Controlador/PDFMenaje.php" class="btn btn-primary">Exportar a PDF</a></li><br/>
   <a href="" class=""></a></li><br/>
   <a href="../Menaje/Modelo/ReporteGrafico.php" class="btn btn-primary">Generar Grafica</a></li><br/>
  </form>
 </div>
 <section class="fontt">
   <section class="group group--color">
      <div class="container">
        </div>
        </section>
        <p class="copy">&copy; 2019 CuisineSoft | Todos los derrechos reservados | </p><br>
        <p class="copy"></p>
</body>
 </html>