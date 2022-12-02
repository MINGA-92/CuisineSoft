<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estiloR.css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <title>Eliminar</title>
</head>
<body>

<?php
require_once "../php/Conexion.php";

if(isset($_GET['idmenaje'])){
    $id=$_GET['idmenaje'];
    $query="DELETE FROM menaje WHERE idmenaje='$id'";
    if(consultarSql($query)){
      echo "Registro Eliminado Con Exito";
      echo "<h1> ¡Registro Eliminado Con Exito! </h1>";
    }else{
       echo ".l. ERROR_2 .l.";
    }
  
}else{
  echo ".l. ERROR .l.";
}
?>
    <div class="c-l-i d-50">
    <label for="btn"> Verificar Registro = </label>
    <a href="http://localhost/CuisinePHP/views/Menaje/ConsultarMenaje.php" class="btnRegistrar"> Consultar Menaje Disponible</a>
    </div>

    <section class="banner">
    <img src="../images/NN.png" alt="" class="banner__img">
    <div class="banner__content"> ¡EL REGISTRO FUE ELIMINADO!</div>
  </section>
    </body>
</html>