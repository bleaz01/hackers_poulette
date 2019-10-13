<?php

include "assets/includes/valided.php";	
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="exercise" content="Author : Riguelle jeason " />
	<link rel"shortcut icon" href="assets/image/hackers-poulette-logo.png"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact us</title>
  </head>
  <body class="container-fluid">
    <section id="nav-bar" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    	<nav class=" navbar navbar-expand-lg navbar-light .bg-transparent">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<img src="assets/image/hackers-poulette-logo.png" class="picture" alt="logo hackers poulette"/>
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
	<section id="forms" class="container">
		<form action="index.php" method="post" id="form" class= "container-fluid" accept-charset="utf-8">
		<img src="assets/image/hackers-poulette-logo(1).png"alt="" />
			<section class="row justify-content-between">
				<div id="formsOne" class="form-group col-sm-12 col-md-6 col-lg-4">
					<label for="name">Name</label>
					<input type="text" name="name"class="form-control pb-1" id="exampleFormControlInput1"  placeholder="<?= $erreur?>">
					<label for="Family name">Family name</label>
					<input type="text" name="family-name" class="form-control" id="exampleFormControlInput1" placeholder="<?= $name1_err?>">
					<label for="Email">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="<?= $email_err ?>">	
					<label id="surname" for="exampleFormControlInput1 ">Surname</label>
					<input type="text" name='surname' class="form-control" id="surname" placeholder="I am robot">
				</div>	
				<div id="formsTwo" class="col-sm-12 col-md-6 col-lg-4">
					<div class="col-12 form-check form-check-inline">
						<label class="form-check-label" for="homme">Mr  </label>
						<input name="gender" class="form-check-input" type="radio"  id="inlineRadio1" value="Mr">
					</div>
					<div class="col-12form-check form-check-inline">
						<label class="form-check-label" for="femme">M/Mm  </label>
						<input name="gender"class="form-check-input" type="radio"  id="inlineRadio2" value="M/Mm"><?= $gender_err ?>
					</div>
					<label for="exampleFormControlInput1" class="mt-4 col-12">Select your countrie </label>
					<select type="text"  name="pays"class="form-control" id="exampleFormControlInput1">
						<?php

							ForEach($countries as $valeur){
								 echo "<option>$valeur</option>";
							}
						?>
					</select>
					<label for="subject">subject</label>
					<select type="text" name="subject" class="form-control col-12" id="exampleFormControlInput1">
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
