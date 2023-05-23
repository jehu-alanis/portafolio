<?php
// Las 2 primeras lineas habilitan el informe de errores

 //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "alanis199426@hotmail.com";
    $nombre = $_POST["nombre"];
     $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre .  "\nCorreo: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
     mail($destino,  $asunto, $contenido);
  
  
echo "<script> swal({
  title: '¡ERROR!',
  text: 'Esto es un mensaje de error',
  type: 'success',
});</script>";  

echo "<script>setTimeout(\"location.href='index.html'\",15000)</script>";

  //echo($nombre);

?>