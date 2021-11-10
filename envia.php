<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';

  $Nombre = $_POST['name'];
  $Email = $_POST['email'];
  $Telefono=$_POST["phone"];
  $Empresa = $_POST['company'];
  $Mensaje = $_POST['message'];
  $Bodytext = "Datos:\n 
		Nombre: ".$Nombre."\n
		Email: ".$Email."\n
		Telefono: ".$Telefono."\n
		Empresa: ".$Empresa."\n
		Mensaje: ".$Mensaje;
 
	$mail = new PHPMailer();
	$mail->SetFrom( $Email, $Nombre);
	$mail->Subject   = 'Solicitud de informes en TuIntegraCRM';
	$mail->CharSet   = 'UTF-8';
	$mail->Body      = $Bodytext;
	$mail->AddAddress('info@integralmx.com');
	$mail->Send();
	echo "<script>alert('Mensaje Enviado');</script>";
	echo "<script>location.href='index.html'</script>";
?>

