<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../css/estiloR.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
  <?php
    if(isset($_GET['idmenaje'])){
        require_once "../php/Conexion.php";

        $idmenaje=$_GET['idmenaje'];
        $query="SELECT * FROM menaje WHERE idmenaje='$idmenaje'";
        $consulta3= consultarSQL($query);
        /*   ->fetch_array  */
        $datos = mysqli_fetch_object($consulta3);
        // var_dump($datos); die();
        echo '
    <main class="main">
    <section class="fontt">
    <section class="group group--color">
      <div class="container">
        <h1 class="main__title"> Modificar Menaje </h1>
        </div>
    </section>
    <section class="group main__about__description">
      <div class="container container--flex">
        <form action="../Controlador/EditarMenaje.php" method= "POST" class="formulario bg-light">
          <h2 class="form__title">Formulario Menaje</h2>
          <input type="hidden" name="idmenaje" id="idmenaje" value="' . $datos->idmenaje . '">
          <div class="c-l-i d-50">
              <label for="fecha">Fecha De Registro</label>
              <input type="date" name="fecha" id="fecha" value="' . $datos->FechaRegistro . '">
          </div>
          <div class="c-l-i">
              <label for="Elemento">Nombre Elemento</label>
              <input type="text" name="Menaje" id="Menaje" value="' . $datos->nombreMenaje . '">
          </div>
          <div class="c-l-i d-50">
              <label for="VidaUtil">Estimado De Vida Util</label>
              <input type="date" name="vida_util" id="vida_util" value="' . $datos->Vida_Util . '">
              <cal_days_in_month >
          </div>
          <div class="c-l-i d-50">
              <label for="cantidad">Cantidad</label>
              <input type="text" name="Cantidad" id="Cantidad" value="' . $datos->Cantidad . '">
          </div>
          <div class="c-l-i">
          <input type="submit" value="Actualizar" class="btnRegistrar" >
          <a href="../Modelo/ConsultaMenaje.php" class="btnRegistrar">Consultar Menaje</a>
          </div>
        </form>
      </div>
      </section>
  </main>';   
    }else{
        echo ".l. ERROR .l.";
    }
    ?>
</body>
</html>