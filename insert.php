<?php
	include 'dbcon.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$error = 1;
	$sender = "karneval@tivoli.dk";
	
	//checker om post nr findes i databasen	
	$query = "SELECT COUNT(1) FROM zip WHERE zip = ?";
	$stmt = $link->prepare($query);
	$stmt->bind_param('i', $zip);
	$stmt->execute();
	
	$stmt->bind_result($rowCount);
	$stmt->fetch();
	$stmt->close();
	
	if($rowCount = 0){
		echo "zip findes ikke i database<br />";
		$error = 2;
	}
	
	if(isset($_POST["news"])){
		$news = 2;
	}
	else{
		$news = 1;
	}
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]{2,}$/", $fname))	{
		echo "fname er skrevet i forkert format <br />";
		$error = 2;
	}	
	
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]{2,}$/", $lname))	{
		echo "lname er skrevet i forkert format <br />";
		$error = 2;
	}	
	
	if (!preg_match("/^\w+@[a-zA-Z_-]+?\.[a-zA-Z]{2,6}$/", $email))	{
		echo "email er skrevet i forkert format <br />";
		$error = 2;
	}	
	//checker om emailen allerede findes i databasen
	$query = "SELECT COUNT(1) FROM bruger WHERE email = ?";
	$stmt = $link->prepare($query);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	
	$stmt->bind_result($rowCount);
	$stmt->fetch();
	$stmt->close();
	
		if($rowCount > 0){
			echo "Emailen findes allerede i database<br />";
			$error = 2;
		}
		//checker om addressen allerede findes i databasen
		$query = "SELECT COUNT(1) FROM bruger WHERE addresse = ?";
		$stmt = $link->prepare($query);
		$stmt->bind_param('s', $addr);
		$stmt->execute();
		
		$stmt->bind_result($rowCount);
		$stmt->fetch();
		$stmt->close();
		
		if($rowCount > 0){
			echo "addressen findes allerede i database<br />";
			$error = 2;
		}
		
	if (!preg_match("/^[a-zA-ZæøåÆØÅ ]* [0-9]{1,30}( ?)[a-zA-ZæøåÆØÅ0-9\.]*$/", $addr))	{
		echo "addr er skrevet i forkert format <br />";
		$error = 2;
	}
	
	if ($error == 2){
		echo "fejl";
		return;
	}
	
	
	//inserter data i databasen
	$stmt = $link->prepare("INSERT INTO bruger (fornavn, efternavn, addresse, email, postnr, nyhedsbrev) VALUES (?,?,?,?,?,?)");
	$stmt->bind_param("ssssis", $fname, $lname, $addr, $email, $zip, $news);
	$stmt->execute();
	
	if($error == 1){
	//konstruere header og besked til en HTML email
	$headers = "From: " . $sender . "\r\n";
	$headers .= "Reply-To: ". $sender . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message = '<html>
  	<body bgcolor="#fff">
   		<p>Tak for din tilmelding i tivolis konkurrence og 2 entre billeter til karneval i tiovoli. </p>
	  </body>
	</html>';
	//sender email efter indsætning
	mail($email, "Karneval i Tivoli", "$message", "$headers");
	
	//sender brugeren tilbage til en "splashside"
	header('Location: landing.php');
	
	}
	
	
?>