<?php
	include '../../itech/php/conn.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require("../../itech/php/mailer/src/Exception.php");
	require("../../itech/php/mailer/src/PHPMailer.php");
	require("../../itech/php/mailer/src/SMTP.php");

	$from = $_POST['email'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$tel = $_POST['telefono'];

	$uno = 1;
	$sql = "SELECT email FROM contacto";
	$res = mysqli_query($conn, $sql);

	if ($res)
	{
		if (mysqli_num_rows($res) > 0) 
		{
			$val = mysqli_fetch_assoc($res);
			$email = $val['email'];

			enviarMail($email, $nombre, $fecha, $hora, $asunto, $mensaje, $tel, $from);
		}
		else
		{
			echo 0;
		}
	}
	else
	{
		echo -2;
	}
   
	function enviarMail($email, $nombre, $fecha, $hora, $asunto, $mensaje, $tel, $from)
	{
		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';

		//s$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com'; //Nombre de host
		$mail->Username = "itech.dgo@gmail.com"; // Correo completo a utilizar
		$mail->Password = "itechC2021"; // Contraseña
		$mail->Port = 587; //Puerto SMTP, 587 para autenticado TLS

		$mail->From = "itech.dgo@gmail.com"; // Desde donde enviamos (Para mostrar)
		$mail->FromName = "Itech";

		$mail->AddAddress($email); // Esta es la dirección a donde enviamos
		// $mail->AddCC("cuenta@dominio.com"); // Copia
		// $mail->AddBCC("cuenta@dominio.com"); // Copia oculta

		$mail->IsHTML(true); // El correo se envía como HTML
		$mail->AddEmbeddedImage("../img/logoitech.png", "logo");
		$mail->Subject = "Nuevo mensaje"; // Este es el titulo del email.
		$body = "<div style='text-align: center;'>";
		$body .= "<h1 style='text-align: center;'>Itech</h1>";
		$body .= "<img src='cid:logo' alt='Logo'><br><br>";
		$body .= "Se ha recibido el siguiente mensaje: <br><br>";
    	$body .= "<div style='text-align: justify;'>";
		$body .= "Asunto: <br><br>";
		$body .= "<p style='font-size: 16px; text-align: center;'>".$asunto."</p><br>";
      	$body .= "<p style='font-size: 16px; text-align: center;'>".$mensaje."</p><br>";
		$body .= "<h3 style='text-align: center;'>Datos de contacto</h3>";
		$body .= "<b>Nombre: </b>".$nombre."<br>";
		$body .= "<b>Teléfono de contacto: </b>".$tel."<br>";
		$body .= "<b>Correo electrónico: </b>".$from."<br>";
		//$body .= "Si no solicitaste cambio de contraseña, ignora este mensaje.";
		$body .= "</div>";
		$body .= "</div>";
		$mail->Body = $body;
		$mail->AltBody = "Se ha recibido un nuevo mensaje de ".$nombre; // Texto sin html
		$exito = $mail->Send();

		if($exito)
		{
			echo 1;
		}
		else
		{
			
			echo -1;

		}
	}
?>