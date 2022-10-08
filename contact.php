<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Contact</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/waloagri.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Nos Services</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">A propos de nous</a></li>
						<li class="nav-item"><a class="nav-link" href="galerie.html">Galerie</a></li>
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/champ-riz.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenue au <br> WALO AGRI</strong></h1>
							<p class="m-b-40">“L'agroécologie est un choix de durabilité pour l'agriculture. 
								C'est un mouvement de fond.” “Rien n'est meilleur que l'agriculture, <br>
								rien n'est plus beau, rien n'est plus digne d'un homme libre. Elle suffit amplement aux besoins de notre vie.”</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/moisonneuse.png" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenue au <br> WALO AGRI</strong></h1>
							<p class="m-b-40">Produire et consommer localement devrait être le grand mot d'ordre planétaire.</p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/tracteur.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenue au  <br> WALO AGRI</strong></h1>
							<p class="m-b-40">La cuisine, c'est l'envers du décors, <br>
							là où s'active les hommes et les femmes pour le plaisir des autres....</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>La bonne cuisine est honnête, sincère, et simple</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div>
					<?php if(isset($_GET['s']) && $_GET['s']=='ok') { ?>
						<div class="alert alert-success text-center">
							Votre message a été bien envoyer avec succés!
						</div>
					<?php } ?>
					</div>
					<form  method="POST" action="sent.php">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="nom" placeholder="Nom et Prénom" required data-error="Entrer votre nom">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Votre Email" id="email" class="form-control" name="email" required data-error="Entrer votre email">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" id="message" name="message" placeholder="Message" rows="4" data-error="Ecrire votre message" required></textarea>
									<!-- <div class="help-block with-errors"></div> -->
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Envoyer</button>

								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Contact -->
	<!-- <div class="col-md-12 border  form">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.4476091498823!2d-7.680433685314898!3d33.54174485190725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62db0efe8723d%3A0x2c11a9f38f1b880a!2sosbt%20school!5e0!3m2!1sfr!2sma!4v1625173612866!5m2!1sfr!2sma" width="100%" height="400" style="border: 3px;" allowfullscreen=""></iframe>
	</div> -->
	<!-- End Contact -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Téléphone</h4>
						<p class="lead">
							+221 77 618 30 91
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
						waloagri@gmail.com</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Adresse</h4>
						<p class="lead">
						Thiagar commune de Ronkh/ Région de Saint Louis</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-md-6">
					<h3>Nos réseaux</h3>
					
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/baba.thiagar"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://wa.me/+221776183091"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

					</ul>
				</div>
				<div class="col-lg-6 col-md-6">
					<h3>Contact</h3>
					<p class="lead">Thiagar commune de Ronkh/ Région de Saint Louis</p>
					<p class="lead"><a href="#">+221 77 618 30 91</a></p>
					<p><a href="#">waloagri@gmail.com</a></p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Diagne Solution. &copy; 2022 <a href="#">Walo Agri</a>

						</p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->

	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.map-full').mapify({
			points: [{
				lat: 40.7143528,
				lng: -74.0059731,
				marker: true,
				title: 'Marker title',
			}]
		});
	</script>
</body>

</html>