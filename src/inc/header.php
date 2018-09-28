<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $titlePlage; ?> | El Arcano</title>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-png" href="<?= $uri['root']; ?>/assets/img/favicon.png">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">

	<link rel="stylesheet" href="<?= $uri['root'] ?>/assets/css/jquery.bxslider.css">
	<link rel="stylesheet" href="<?= $uri['root'] ?>/assets/css/style.css">

	<script src="<?= $uri['root'] ?>/assets/js/jquery.min.js"></script>
	<script src="<?= $uri['root'] ?>/assets/js/popper.min.js"></script>
	<script src="<?= $uri['root'] ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?= $uri['root'] ?>/assets/js/bootstrap-select.min.js"></script>
	<script src="<?= $uri['root'] ?>/assets/js/jquery.bxslider.min.js"></script>
</head>
<body>
	<?php if ($titlePlage != 'Inicio') : ?>

	<!-- =========== Navbar ============= -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pl-sm-3 pl-md-5 pl-xl-6 pr-sm-3 pr-md-5 pr-xl-6">
		<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME'])) == 'eventos') : ?>
			<a href="<?= $uri['events'] ?>/" class="navbar-brand text-primary" id="logo">
				<img src="<?= $uri['root'] ?>/assets/img/img_logo_casa.png" class="img-fluid" alt="Arcano Eventos">
			</a>
		<?php else : ?>
			<a href="<?= $uri['book'] ?>/" class="navbar-brand text-primary" id="logo">
				<img src="<?= $uri['root'] ?>/assets/img/img_logo_libreria.png" class="img-fluid" alt="Arcano Librería">
			</a>
		<?php endif ?>

		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item dropdown inicioMenu">
					<a class="nav-link text-light dropdown-toggle" data-target="<?= $uri['root'] ?>/" href="<?= $uri['root'] ?>/" id="inicioAction" role="button" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">Inicio</a>
					<div class="dropdown-menu" aria-labelledby="inicioAction">
						<a class="dropdown-item" href="<?= $uri['book'] ?>/">Librería</a>
						<a class="dropdown-item" href="<?= $uri['events'] ?>/">Casa Eventos</a>
					</div>
				</li>
				<!-- <li class="nav-item active"> -->
				<li class="nav-item">
				<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME'])) == 'eventos') : ?>
					<a href="<?= $uri['events'] ?>/" class="nav-link text-light">Eventos</a>
				<?php else: ?>
					<a href="<?= $uri['book'] ?>/novedades" class="nav-link text-light">Libros</a>
				<?php endif ?>
				</li>
				<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME'])) == 'libreria') : ?>
				<li class="nav-item">
					<a href="#" class="nav-link text-light">Productos</a>
				</li>
				<?php endif ?>
				<li class="nav-item">
					<a href="#" class="nav-link text-light">Comunidad</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-light">Nosotros</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-light">Contacto</a>
				</li>
			</ul>
		</div>

		<ul class="navbar-nav justify-content-end iconsArcanoNav">
			<li class="nav-item dropdown">
				<a class="nav-link custom-link user dropdown-toggle" href="#" id="userActions" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
				<div class="dropdown-menu" aria-labelledby="userActions">
					<a class="dropdown-item showLoginForm" href="#">Iniciar Sesión</a>
					<a class="dropdown-item showRegisterForm" href="#">Regístrate</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= $uri['root'] ?>/checkout" class="nav-link custom-link shop text-center">
					<span>01</span>
				</a>
			</li>
		</ul>
	</nav>
	<!-- =========== Navbar ============= -->

	<?php endif ?>
