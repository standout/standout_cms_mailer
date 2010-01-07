<?php

	# Configuration
	$recipient = "changeme@example.com";
	$redirect = "http://www.example.com/thankyou.html";


	$email = $_POST['email'];
	if($email == "")
	{
		$email = $recipient;
	}
	
	

	$subject = 'Webbformulär';
	$message = create_message_from_post_variables($_POST);
	$headers = 'From: ' . $email . "\r\n" .  'X-Mailer: PHP/' . phpversion();

	mail($recipient, $subject, $message, $headers);


	function create_message_from_post_variables($variables)
	{
		$message = "\n---------------\n";
		foreach($variables as $key => $value)
		{
			$message .= "\t$key: $value\n";
		}
		$message .= "\n---------------\n";
		
		return $message;
	}


	header("Location: $redirect");

?>