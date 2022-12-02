<?php
      require_once "../php/Conexion.php";
      require_once '../php/dompdf-0.5.1/dompdf_config.inc.php';
      require_once "../php/dompdf-0.5.1/dompdf_config.inc.php";

$html='<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>
  <section>
   <h1>Menaje Disponible= </h1>
   </section>
<div class="table thead td">
<table>
 <thead>
 <tr>
 <th> Id Menaje </th>
 <th> Fecha De Registro </th>
 <th> Nombre Menaje </th>
 <th> Cantidad </th>
 <th> Vida Util </th>
 </tr>
 </thead>
 <tbody>
 <?php
 require_once "../php/Conexion.php";
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
   </tr>
   ";}
 date_default_timezone_set("America/Bogota");
 echo date ("d-F-Y / h:i a");
 ?>
 </tbody>
 </table>
 </div>
</body>
</html>';

$html=utf8_decode($html);
$dompdf= new DOMPDF();
$dompdf->load_html($html);
ini_set("memory_limit","32");
$dompdf->set_paper("A4", "portrait");
$dompdf->render();
$dompdf->stream("Menaje.PDF");
?>