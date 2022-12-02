<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estiloR.css">
    <title>Guardar Registro</title>
</head>
<body>

<?php
require_once "../php/Conexion.php";

$FechaRegistro=$_POST['fecha'];
$nombre=$_POST['Menaje'];
$cantidad=$_POST['Cantidad'];
$vida_util=$_POST['Vida_Util'];

$query= "INSERT INTO menaje(FechaRegistro, nombreMenaje, Cantidad, Vida_Util)VALUES('$FechaRegistro','$nombre','$cantidad','$vida_util')";
// var_dump($query); die();
 if (consultarSQL ($query)){
     echo " Datos Guardados Con Exito ";
 }else {
    echo " .l. Error al Guardar Datos .l. ";
 }
?>  
    <section class="banner">
    <img src="../images/vector.jpg" alt="" class="banner__img">
    <div class="banner__content">
    <h1> ¡Registro Guardado Con Exito! </h1>
    </div>
    </section>
    
    <h1> ¿Que Deseas Hacer? = </h1>
    <div class="c-l-i d-50">
    <label for="btn"> Insertar Nuevo Registro </label>
    <a href="../Modelo/RegistrarMenaje.php" class="btnRegistrar"> Volver Atras </a>
    </div>
    <div class="c-l-i d-50">
    <label for="btn"> Verificar Registro </label>
    <a href="../Modelo/ConsultaMenaje.php" class="btnRegistrar"> Consultar Menaje Disponible </a>
    </div>
</body>
</html>