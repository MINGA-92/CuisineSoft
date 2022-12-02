<?php

  $Nombre=$_POST['Nombre'];
  $Email=$_POST['email'];
  $Asunto= $_POST['Asunto'];
  $Mensaje= $_POST['Mensaje'];
  
  if(isset($_POST['enviar'])){
      if(!empty($_POST['Nombre']) && !empty($_POST['email']) && !empty($_POST['Asunto']) && !empty($_POST['Mensaje'] )){

    $Destino= "Rendon92@misena.edu.co"; 
    $header = "De: $Nombre " . "/r/n";
    $header .= "Correo: $Nombre" . "/n";
    $header .= "Asunto: $Nombre";
    $header .= "Memsaje: $Nombre";
    $mail= @mail($Nombre,$Asunto,$Mensaje,$header);
      if($mail){
          echo "¡Mensaje Enviado!";
      }
    }  
  }else{
    echo "¡ .l. ERROR .l. !";
  }
?>