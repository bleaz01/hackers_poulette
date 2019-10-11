<?php
	session_start();
//Span
	if(!empty($_POST['robot'])){
		header("location: https://bleaz01.github.io/404-page/");
		exit();
		}

//Variable _POST

$name =  $_POST['name'];
$name1 = $_POST['family-name'];
$email = $_POST['email'];
$genre = $_POST['genre'];
$pays = $_POST['pays'];
$subject = $_POST['subject'];
$text = $_POST['text'];



//Variable usuel

$countries=['Belgique','France', 'Suisse', 'Allemagne', 'Pays-Bas', 'England', 'Italie', 'Espagne', 'Portucal'];
$subj=['Annulations de commande','Service client','Jop'];

$valid = 0;
//Ligne de Code


			//Name
			if(isset($name) && empty($name)){
			$erreur = "champ obligatoir";
			}			
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($name))){
			$erreur = 'Votre nom est pas corrects.';
			}
			else{
				$valid++;
			}
		
		
			//Family name
			if(isset($name1) && empty($name1)){
				$name1_err = "champ obligatoir";
			}
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($name1))){
				$name1_err = 'Votre nom est pas corrects.';
			}
			else{
				$valid++;
				}

			//Email
			if(isset($email) && empty($email)){
				$email_err ="champ obligatoir";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email_err ="erreur dans l 'email";
			}
			else{
				$valid++;
				}
			//gender
			if(isset($gender) && empty($gender)){ 
				$gender_err ="champ obligatoir";
			}
			else{
				$valid++;
				}	
			//text
			if(isset($text) && empty($text)){
				$msg_err="champ obligatoir";
				}
			else if(preg_match_all('/fid=\'([^\']+)\'/',htmlspecialchars($text))){

				$msg_err="erreur dans le text";
			}
			else{
				$valid++;
				}

if($valid == 5){
	header("location: forms.php");
	}
		$_SESSION["key"] = $_POST;
var_dump($_SESSION["key"]);

?>

	


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/style.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact us</title>
  </head>
  <body class="container-fluid">
    <section id="nav-bar" class="mt-5 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    	<nav class=" navbar navbar-expand-lg navbar-light .bg-transparent">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#">Hidden brand</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>
    </section>
	<section id="forms" class="mt-5 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<form action="index.php" method="post" accept-charset="utf-8">
		<img src="assets/image/hackers-poulette-logo(1).png"alt="" />
			<section class="d-flex">
				<div id="formsOne" class="form-group p-2 mt-5 col-sm-12 col-md-6 col-lg-4">
					<label for="name">Name</label>
					<input type="text"  name="name"class="form-control pb-1" id="exampleFormControlInput1" placeholder="<?= $erreur?>">
					<label for="Family name">Family name</label>
					<input type="text" name="family-name" class="form-control" id="exampleFormControlInput1" placeholder="<?= $name1_err?>">
					<label for="Email">Email address</label>
					<input type="email"  name="email" class="form-control" id="exampleFormControlInput1" placeholder="<?= $email_err  . $email ?>">	
				</div>	
				<div id="formsTwo" class="p-2 mt-5 ml-auto col-sm-12 col-md-6 col-lg-4">
					<div class="form-check form-check-inline mb-1">
					<span><?= $gender_err ?></span>
						<input name="genre" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Mr">
						<label class="form-check-label" for="homme">Mr</label>
					<div id="robot" class="form-group">
						<label class="d-none" for="exampleFormControlInput1 ">Ascii style</label>
						<input type="text" name='robot' class="form-control d-none" id="exampleFormControlInput1" placeholder="I am robot">
					</div>
					</div>
					<div class="form-check form-check-inline">
						<input name="genre"class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="M/Mm">
						<label class="form-check-label" for="femme">M/Mm</label>
					</div>
					<label for="exampleFormControlInput1" class="pb-5">pays</label>
					<select type="text"  name="pays"class="form-control" id="exampleFormControlInput1" placeholder="Belgique">
						<?php

							ForEach($countries as $valeur){
								 echo "<option>$valeur</option>";
							}
						?>
					</select>
					<label for="subject">subject</label>
					<select type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder=>
						<?php
							ForEach($subj as $valeur){
							echo"<option>$valeur</option>";
							}
						?>
					</select>
				</div>
			</section>
			<div id="textarea" class=" mt-5 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="form-group">
					<label for="Message">Message</label>
					<textarea name="text" class="p-2 form-control" id="exampleFormControlTextarea1" rows="3"><?= $msg_err ?></textarea>

				</div>
				<button type="submit" class="p-2 mb-2 btn btn-outline-light">send</button>
			</div>
		</form>
	</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
