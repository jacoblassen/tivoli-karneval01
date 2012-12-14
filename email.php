<?php
	$name = $_POST['custname'];
	$email = $_POST['custemail'];
	$message = $_POST['message'];
	
	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail("tivoli@jacob-lassen.dk", $email, "$message", "$headers");
	
	header('Location: kontaktlanding.php');
?>