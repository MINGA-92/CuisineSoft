<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Consultar</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="../css/main.css" type="text/css"/>
  <link rel="stylesheet" href="../css/estiloR.css">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
<div id="bg">
		<div class="wrap">
			<!-- menu -->
			<div id="mainmenu">
      <ul id="menu">
          <li><a class="current" href="http://localhost/CuisinePHP/index.php">Inicio</a></li>
					<li><a href="../Modelo/ConsultaMenaje.php">Consultar Menaje</a>
						<ul><li><a href="../Modelo/RegistrarMenaje.php">Registrar Menaje</a></li><li><a href="Modelo/RegistrarEventualidad.php">Registrar Eventualidad</a></li></ul></li>
            <li><a href="../Modelo/RegistrarMenaje.php">Registrar Menaje<span class="icon-dot"></span></a></li>
          <li><a href="../Modelo/RegistrarEventualidad.php">Registrar Eventualidad</a></li>
          <li><a href="../Error.php"> Servicios </a></li>
					<li><a href="../Modelo/Contact.php"> Contactenos</a></li>
				</ul>
			</div>
   </div>
</div>


<!-- barra Search -->
<section>
<h3>Menaje = </h3>
<form action="../Controlador/Buscar.php " method="POST" autocomplete="off">
            <div class="input-group">
              <input type="text" name="palabra" class="form-control bg-light border-0 small" placeholder=" Buscar Menaje..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" value="Buscar"  class="btn btn-primary" iconv= "ui-icon-zoomin">
              </button>
              </div>
            </div>
        </form>
<!-- logo -->
   <h1>Resultado Busqueda= !</h1>
<!-- /logo -->
</section>
<section class="table thead td">
<?php
require_once "../php/Conexion.php";
$palabra=$_POST['palabra'];
$query="SELECT * FROM menaje WHERE nombreMenaje LIKE '%$palabra%'";
$consulta2= consultarSql($query);

if($consulta2->num_rows>=1){
    echo "<table>
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
    <tbody>";
    ?>
 <form>
   <a href="../Controlador/PDFBuscar.php" class="btn btn-primary"></a></li>
 <br/>
 </form>
    <?php
    while ($fila=$consulta2->fetch_array(MYSQLI_NUM)){
      echo " <tr>
      <td>".$fila[0]."</td>
      <td>".$fila[1]."</td>
      <td>".$fila[2]."</td>
      <td>".$fila[3]."</td>
      <td>".$fila[4]."</td>
      <td><a href='ActualizarMenaje.php?idmenaje=$fila[0]'> Editar</td>
      <td><a href='../Menaje/Controlador/EliminarMenaje.php?idmenaje=$fila[0]'> Borrar</td>
      </tr>";
    }
    echo "</tbody>
    </table>";
     }else{
        echo "No Se Encontraron Resultados Para ".$palabra;
    }
    ?>

<section class="banner">
 <img src="../images/bannerCMenaje.jpg" alt="" class="banner__img">
</section>
</section>
</body>
</html>