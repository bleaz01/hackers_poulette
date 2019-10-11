<?php 
			session_start();

		//Mail & message de confirmation
		

		$message = "bonjour" . $_SESSION["key"]["gender"] ." " . $_SESSION["key"]["name"] . " " . " merci de rejoindre notre communauté";
		$subject = "Formulaire";
		$recip = $update_post['email'];
		$mailheaders ="";
		mail($recip ,$subject ,$message);
			
		echo "<HTML><HEAD>";
		echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
		echo "<H1 align=center> " . $message . " </H1>";
		echo "<P align=center>";
		echo "Votre formulaire à bien été envoyé a l'adress" . " ". $_SESSION["key"]["email"]. "  " . "</P>";
		echo "</BODY></HTML>";

			
		
		
?>
<img src="assets/image/hackers-poulette-logo.png"/>
