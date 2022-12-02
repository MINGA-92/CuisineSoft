<?php
   require_once '../php/dompdf-0.5.1/dompdf_config.inc.php'; 

$html='<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>
<section>
<div class="table thead td">
<table>
 <thead>
 <tr>
 <th> Id Eventualidad </th>
 <th> Id Tipo De Evento </th>
 <th> Id Empleado </th>
 <th> Fecha De Registro </th>
 <th> Fecha Del Suceso </th>
 <th> Cantidad </th>
 <th> Id Elementos Involucrados</th>
 <th> Elementos Involucrados</th>
 <th> Descripcion</th>
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
   <td>".$fila[8]."</td>
   </tr>
   ";
 }
 date_default_timezone_set("America/Bogota");
 echo date ("d-Y-F / h:i a");
 ?>
 </div>
 </section>
</body>
</html>';

$html=ob_get_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->set_paper('letter', 'portrait');
$dompdf->render();
$dompdf->stream('Eventualidad.PDF');
?>