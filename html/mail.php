<?php

	$to="prajaktagole5@gmail.com";
	$body="Confirmation mail from php.";
	$header="From:admin@Home";
	$subject="Email from me";

	mail($to,$subject,$body,$header);


	$to = $_POST['mail_to'];
	$subject = $_POST['mail_sub'];
	$txt = $_POST['mail_msg'];
	$headers = "From:prajaktagole5@gmail.com";
		
	if(mail($to,$subject,$txt,$headers))
		echo "<h1>Mail sended successfully.....</h1>";
	else
		echo "<h1>Error in sending Mail.....</h1>";
	
?>