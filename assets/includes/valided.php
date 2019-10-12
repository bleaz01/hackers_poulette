<?php

session_start();

//Span

	if(!empty($_POST['surname'])){
		header("location: https://bleaz01.github.io/404-page/");
		exit();
		}

//Variable POST

$name =  $_POST['name'];
$name1 = $_POST['family-name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pays = $_POST['pays'];
$subject = $_POST['subject'];
$text = $_POST['text'];



//Variable usuel

$countries=['Belgique','France', 'Suisse', 'Allemagne', 'Pays-Bas', 'England', 'Italie', 'Espagne', 'Portucal'];
$subj=['Annulations de commande','Service client','Jop'];

$valid = 0;

//Check forms:

			//Name
			if(empty($name)){
			$erreur = "champ obligatoir";
			}			
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($name))){
			$erreur = "name erro, caractére only pleas.";
			}
			else{
				$erreur = $name;
				$valid++;
			}
		
		
			//Family name
			if(empty($name1)){
				$nam1 =	$name1_err = "champ obligatoir";
			}
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($name1))){
				$name1_err = 'family-name erro, caractére only pleas.';
			}
			else{
				$name1_err = $name1;
				$valid++;
				}

			//Email
			if(empty($email)){
				$email_err ="champ obligatoir";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email_err ="erreur dans l 'email";
			}
			else{
				$email_err = $email;
				$valid++;
				}
			//gender
			if(empty($gender)){ 
				$gender_err ="champ obligatoir  ";
			}
			else{
				$valid++;
				}	
			//text
			if(empty($text)){
				$msg_err="champ obligatoir";
				}
			else if(preg_match('/fid=\'([^\']+)\'/',htmlspecialchars($text))){

				$msg_err="Erro text hacker-man";
			}
			else{
				$msg_err = $text;
				$valid++;
				}
//validation tu fomulaire:
if($valid == 5){
	header("location: forms.php");
	}
		$_SESSION["key"] = $_POST;

?>
