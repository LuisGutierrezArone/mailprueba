<?
$nombre = $_POST['nombres'];
$correo = $_POST['Correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$fecha = 'Enviado:' . date("Y-m-d H:i:s") . "\n";

$para = "luisgutierrezarone@gmail.com";
$subject = "Contacto Ibmobiliari Formulario Contacto";
$message = "Nombre : $nombre \n"
            ."Correo : $correo \n"
            ."Asunto : $asunto \n"
            ."Mensaje : $mensaje \n"
            ."Fecha : $fecha";

$cabeceras .= 'From: CORPORACIÓN IBGROUP <ibmobiliari@corpibgroup.com>' . "\r\n".
                'Reply-To: ibmobiliari@corpibgroup.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
mail($para,$subject,$message,$cabeceras);

echo 'exito';
?>
