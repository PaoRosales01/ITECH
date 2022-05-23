<?php
	include '../../itech/php/conn.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require("../../itech/php/mailer/src/Exception.php");
	require("../../itech/php/mailer/src/PHPMailer.php");
	require("../../itech/php/mailer/src/SMTP.php");

	$from = $_POST['from'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$nombre = $_POST['nombre'];
	$motivo = $_POST['motivo'];
	$tel = $_POST['tel'];

	$sql = " SELECT email FROM contacto LIMIT 1";
	$res = mysqli_query($conn, $sql);

	if ($res)
	{
		if (mysqli_num_rows($res) > 0) 
		{
			$val = mysqli_fetch_assoc($res);
			$email = $val['email'];

			enviarMail($email, $nombre, $fecha, $hora, $motivo, $tel);
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

	function enviarMail($email, $nombre, $fecha, $hora, $motivo, $tel)
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
		$mail->AddEmbeddedImage("../img/brand-icon.png", "logo");
		$mail->Subject = "Nueva cita agendada"; // Este es el titulo del email.
		$body = "<div style='text-align: center;'>";
		$body .= "<h1 style='text-align: center;'>Itech</h1>";
		$body .= "<img src='cid:logo' alt='Logo'><br><br>";
		$body .= "Se ha agendado una nueva cita, los detalles a continuación: <br><br>";
		$body .= "<div style='text-align: justify;'>";
		$body .= "<b>Nombre del solicitante: </b>".$nombre."<br>";
		$body .= "<b>Teléfono de contacto: </b>".$tel."<br>";
		$body .= "<b>Fecha de la cita: </b>".$fecha."<br>";
		$body .= "<b>Hora de la cita: </b>".$hora."<br>";
		$body .= "<b>Motivo de la cita: </b>".$motivo."<br>";
		//$body .= "Si no solicitaste cambio de contraseña, ignora este mensaje.";
		$body .= "</div>";
		$body .= "</div>";
		$mail->Body = $body;
		$mail->AltBody = "Notificación de nueva cita agendada para el día".$fecha; // Texto sin html
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