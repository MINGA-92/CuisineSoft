<?php
 $ruta="../ArchivosSubidos/.$_FILES['Archivo']['name']";
 if (move_uploaded_file($_FILES['Archivo']['tmp_name'], $ruta)){
   echo "El Archivo Se Cargo Exitosamente";
 }else{
   echo ".l. ERROR El Archivo NO Se Cargo .l.";
 }
 echo $_FILES['Archivo']['name'];
 echo "<br>";
 echo $_FILES['Archivo']['type'];
 echo "<br>";
 echo $_FILES['Archivo']['size'];
 echo "<br>";
 echo $_FILES['Archivo']['tmp_name'];
 echo "<br>";
 echo $_Files['Archivo']['error'];
 echo "<br>";
?>