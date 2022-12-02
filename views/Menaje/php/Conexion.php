<?php
function consultarSQL($query){
$mysqli = new mysqli ("localhost","root","","nueva");
 if (mysqli_connect_errno()){
     printf("Conexion Fallida", mysqli_connect_errno());
 }else {
     echo " Conectado a La Base de Datos...  ";
 }
 $mysqli->set_charset("utf8");
 $mysqli->autocommit(FALSE);
 $mysqli->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
  if ($Consulta=$mysqli->query($query)){
      if($mysqli->commit()){
      }else{
          echo "Error .l.";
      }
    }else{
        $mysqli->rollback();
    }
    return $Consulta;
}
?>