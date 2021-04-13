<?
$nombre = $_POST['nombres'];
$correo = $_POST['Correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$fecha = 'Enviado:' . date("Y-m-d H:i:s") . "\n";

$para = 'luisgutierrezarone@gmail.com;luisgutierrez_1994@hotmail.com;';
$message = "Nombre : $nombre \n"
            ."Correo : $correo \n"
            ."Asunto : $asunto \n"
            ."Mensaje : $mensaje \n"
            ."Fecha : $fecha";


$tipocorreos=explode('@',$para);
$para=trim($para);
$nletra=strlen($para);
$acorreo='';
$n=1;

for($x=0;$x<$nletra;$x++){
  if($para[$x]==';'){
    $n++;
    $vcorreo[$n]=$acorreo;
    $acorreo='';
  }else{
    $acorreo=$acorreo.$para[$x];
  }
}

foreach($vcorreo as $mail){
  $subject = "Contacto Ibmobiliari Formulario Contacto";
  $cabeceras ='MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

  $tipocorreos=explode('@',$mail);

if($tipocorreos['1']=='gmail.com'){
  $cabeceras .= "From: CORPORACIÓN IBGROUP" . "\r\n";
}else{
  $cabeceras .= 'From: CORPORACIÓN IBGROUP <ibmobiliari@corpibgroup.com>' . "\r\n";
}
mail($mail,$subject,$message,$cabeceras);
echo $mail.', exito';
}
?>
