<?php

	if(count($_POST) > 0) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";
		
		$body = 
		@"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:i",time())."<br />
		<hr />
		$comments
		<hr />
		Email end";
		
		if(mail("sethtv@hotmail.com", "Asunto", $body, $header)) {
			die("true");	
		} else {
			die("There was an error sending the email.");	
		}
	}
	
?>