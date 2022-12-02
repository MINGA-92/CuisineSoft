<?php
class Controller {
     public function plantilla (){
        include "Vista/Plantilla.php";
    }
}
require_once "../php/Conexion.php";
/*$mysqli->query("INSERT INTO diegodb(idmenaje, nombre, cantidad, vida_util)VALUES()");
*/

date_default_timezone_set("America/Bogota");
echo "Hoy= ";
echo date ("d-Y-F / h:i a");
?> 