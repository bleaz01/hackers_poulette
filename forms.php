<?php 
			session_start();

		//Mail & message de confirmation
		

		$message = "Bonjour" . " " . $_SESSION["key"]["gender"] ." " . $_SESSION["key"]["name"] . " " .$_SESSION["key"]["family-name"] . " " . " merci de rejoindre notre communautée";
		$subject = "Formulaire";
		$recip = $_SESSION["key"]['email'];
		$mailheader ="From: ridjea@gmail.com";
		$send = mail($recip, $subject, $message, $mailheader);

		if(true == $send){
			$ok = "Votre formulaire à bien été envoyé a l'adress" . " ". $_SESSION["key"]["email"]. "</P>";
		}
		else{
			$ok = "Votre formulaire n'à pas été envoyé </P>";
			}
	
		echo "<HTML><HEAD>";
		echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
		echo "<H1 align=center> " . $message . " </H1>";
		echo "<P align=center>";
		echo $ok;
		echo "</BODY></HTML>";

			
		 
		
?>
<img src="assets/image/hackers-poulette-logo.png"/>
