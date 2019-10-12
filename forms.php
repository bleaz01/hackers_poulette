<?php 
			session_start();

		//Mail & message de confirmation
		

		$message = "Bonjour" . " " . $_SESSION["key"]["gender"] ." " . $_SESSION["key"]["name"] . " " .$_SESSION["key"]["family-name"] . " " . " merci de rejoindre notre communautée";
		$subject = "Formulaire";
		$recip = $_SESSION["key"]['email'];
		$mailheader ="From: ridjea@gmail.com";
		 mail($recip, $subject, $message, $mailheader);
	
		echo "<HTML><HEAD>";
		echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
		echo "<H1 align=center> " . $message . " </H1>";
		echo "<P align=center>";
		echo "Votre formulaire à bien été envoyé a l'adress" . " ". $_SESSION["key"]["email"]. "</P>";
		echo "</BODY></HTML>";

			
		 
		
?>
<img src="assets/image/hackers-poulette-logo.png"/>
