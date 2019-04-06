<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['comments'];
	$to = "construccion@exno.com.mx";
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From:<'.$mail. "> \r\n";
	mail($to,$name,$message,$headers);
	header("Location: http://exno.com.mx/contacto.html");
	die();
?>