<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Eventos</title>
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/estiloR.css">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <section class="banner">
    <img src="../images/restaurant.jpg" alt="" class="banner__img">
    <div class="banner__content">
    <h1> ¡Controla Toda Las Situaciones Inesperadas! </h1>
    </div>
    </section>

<div class="table thead td">
<table>
 <thead>
 <tr>
 <th> Id Eventualidad </th>
 <th> Fecha De Registro </th>
 <th> Id Tipo De Evento </th>
 <th> Descripcion</th>
 <th> Fecha Del Suceso </th>
 <th> Id Elementos Involucrados</th>
 <th> Cantidad </th>
 <th> Id Restaurante</th>
 <th> Eliminar </th> 
 </tr>
 </thead>
 <tbody>

<?php
 require_once "../php/Conexion.php";
 $query="SELECT * FROM eventualidad";
 $Consulta=consultarSql($query);
 while ($fila=$Consulta->fetch_array(MYSQLI_NUM)){
   echo "
   <tr>
   <td>".$fila[0]."</td>
   <td>".$fila[1]."</td>
   <td>".$fila[2]."</td>
   <td>".$fila[3]."</td>
   <td>".$fila[4]."</td>
   <td>".$fila[5]."</td>
   <td>".$fila[6]."</td>
   <td>".$fila[7]."</td>
   <td><a href='../Controlador/EliminarEvento.php?ideventualidad=$fila[0]'> Borrar</td>
   </tr>
   ";
 }
 date_default_timezone_set("America/Bogota");
 echo date ("d-Y-F / h:i a");
 ?>
 </div>
 <section>
    <h1> ¿Que Deseas Hacer? = </h1>
    <div class="c-l-i d-50">
    <label for="btn"> Registrar Nueva Eventualidad = </label>
    <a href="../Modelo/RegistrarEventualidad.php" class="btnRegistrar"> Volver Atras </a>
    </div>
    <div class="c-l-i d-50">
    <label for="btn"> Terminar = </label>
    <a href="http://localhost/CuisinePHP/index.php" class="btnRegistrar"> Volver Al Inicio </a>
    </div>
    </section> 
  <form>
   <a href="../Controlador/PDFEvento.php" class="btn btn-primary">Exportar a PDF</a></li><br/>
  </form>
</body>
</html>