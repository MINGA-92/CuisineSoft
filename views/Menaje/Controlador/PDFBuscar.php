<form action="../Controlador/Buscar.php " method="POST" autocomplete="off">
            <div class="input-group">
              <input type="text" name="palabra" class="form-control bg-light border-0 small" placeholder=" Buscar Menaje..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" value="Buscar"  class="btn btn-primary" iconv= "ui-icon-zoomin">
              </button>
              </div>
            </div>
 </form>
<?php
   require_once "../php/Conexion.php";
   require_once '../php/fpdf/fpdf.php'; 

   $palabra=$_POST['palabra'];
   $query="SELECT * FROM menaje WHERE nombreMenaje LIKE '%$palabra%'";
   $consulta2= consultarSql($query);
$html='<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>

<h1>Resultado Busqueda= !</h1>

<section class="table thead td">
if($consulta2->num_rows>=1){
    echo "<table>
    <thead>
    <tr>
    <th> Id Menaje </th>
    <th> Fecha De Registro </th>
    <th> Nombre Menaje </th>
    <th> Cantidad </th>
    <th> Vida Util </th>

    </tr>
    </thead>
    <tbody>";
    
    while ($fila=$consulta2->fetch_array(MYSQLI_NUM)){
      echo " <tr>
      <td>".$fila[0]."</td>
      <td>".$fila[1]."</td>
      <td>".$fila[2]."</td>
      <td>".$fila[3]."</td>
      <td>".$fila[4]."</td>
      </tr>";
    }
    echo "</tbody>
    </table>";
     }else{
        echo "No Se Encontraron Resultados Para ".$palabra;
    }
?>
</section>
</body>
</html>';

$html=utf8_decode($html);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();
$pdf->stream("Busqueda.PDF");
?>