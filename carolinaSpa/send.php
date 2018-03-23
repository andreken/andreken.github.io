<?php

// Check if the file is called from an ajax request
function isAjax(){
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'; 
}


if(isAjax()){
	//Take data from post request
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	// Create header
	$header = 'From: ' .$email. '\r\n';
	$header .= 'X-Mailer: PHP/' .phpversion(). '\r\n';
	$header .= 'Mime-Version: 1.0 \r\n';
	$header .= 'Content-Type: text/plain';
	// Create body
	$body = "This message was sent by: " .$name. '\r\n';
	$body .= "Email: " .$email. '\r\n';
	$body .= 'Message: ' .$message. '\r\n';
	// Create addressee
	$for = "andrebb92@gmail.com";
	// Create Subject
	$subject = "Contact from website";
	// Send mail
	mail($for, $subject, utf8_encode($message), $header);
	// Return value to the caller
	echo json_encode(array(
		'message' => sprintf('Your message has been sent!')
	));

} else {
	die("That's not allowed");
}

?>