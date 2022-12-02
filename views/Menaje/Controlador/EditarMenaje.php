<?php
require_once "../php/Conexion.php";
$id=$_POST ['idmenaje'];
$Fecha=$_POST ['fecha'];
$Nombre= $_POST ['Menaje'];
$Cantidad=$_POST ['Cantidad'];
$VidaUtil=$_POST ['vida_util'];
$campos="FechaRegistro='$Fecha', nombreMenaje='$Nombre', Cantidad='$Cantidad', Vida_Util='$VidaUtil'";

$query="UPDATE menaje SET $campos WHERE idmenaje='$id'";
$consulta4=consultarSQL($query);
if($consulta4){
  header('Location: http://localhost/CuisinePHP/views/Menaje/ConsultarMenaje.php');
}else{ 
  echo ".l.ERROR.l.";
}
?>