<?php

require __DIR__."/vendor/autoload.php";

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ridjea@gmail.com';                     // SMTP username
    $mail->Password   = '6ADTXz3SvNtcIZHF';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ridjea@gmail.com', 'Jeason Riguelle');
    $mail->addAddress($_SESSION["key"]["email"],  $_SESSION["key"]["name"]."".$_SESSION["key"]["family-name"]);     // Add a recipient

    $message = "Bonjour" . " " . $_SESSION["key"]["gender"] ." " . $_SESSION["key"]["name"] . " " .$_SESSION["key"]["family-name"] . " " . " merci de rejoindre notre communautée";
		$subject = "Formulaire";
		$recip = $_SESSION["key"]['email'];

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo $Message;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	 
		
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>confirmation</title>
	</head>
	<body>
		<?= $toSend ?>
	</body>
</html>
<img src="assets/image/hackers-poulette-logo.png"/>
