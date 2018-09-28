<?php
$titlePlage = 'Encuentos Espirituales';
require __DIR__ . '/../../app.php';
include $path['inc'] . '/header.php';
?>

	<!-- =========== Banner ============= -->
	<section class="hero esoteric">
		<div class="container-fluid">
			<div class="row">
				<div class="hero-content p-5 m-5">
					<div class="col-sm-12 col-md-8 col-lg-4 mx-auto pt-4">
						<h2 class="text-center text-white font-weight-normal featured-title">Un espacio que te invita a conectar con tu interior</h2>
					</div>

					<div class="col-12 pt-lg-4">
						<a href="#" class="icon-display scroll-next scroll-bottom mx-auto"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =========== Banner ============= -->

	<!-- =========== Content ============= -->
	<section class="listed-events">
		<div class="container">
			<div class="row">
				<div class="card-columns pt-5">
					<a href="<?= $uri['events'] ?>/item" class="card img">
						<img class="card-img-top mx-auto" src="<?= $uri['root'] ?>/assets/img/events/01.jpg" alt="Card image cap">
						<span class="tag events">Eventos</span>
						<div class="card-body">
							<h5 class="card-title">Título</h5>
							<p class="card-text extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolore.</p>
							<p class="card-text text-right"><small class="text-muted"><i><img src="<?= $uri['root'] ?>/assets/img/icon/clock.svg" alt=""></i> 30 de septiembre de 2018</small></p>
						</div>
					</a>
					<a href="<?= $uri['events'] ?>/item" class="card img">
						<img class="card-img-top" src="<?= $uri['root'] ?>/assets/img/events/03.jpg" alt="Card image cap">
						<span class="tag events">Eventos</span>
						<div class="card-body">
							<h5 class="card-title">Título</h5>
							<p class="card-text extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolore.</p>
							<p class="card-text text-right"><small class="text-muted"><i><img src="<?= $uri['root'] ?>/assets/img/icon/clock.svg" alt=""></i> 30 de septiembre de 2018</small></p>
						</div>
					</a>
					<a href="<?= $uri['events'] ?>/item" class="card img">
						<img class="card-img-top" src="<?= $uri['root'] ?>/assets/img/events/05.jpg" alt="Card image cap">
						<span class="tag news">Noticias</span>
						<div class="card-body">
							<h5 class="card-title">Título</h5>
							<p class="card-text extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolore.</p>
							<p class="card-text text-right"><small class="text-muted">30 de septiembre de 2018</small></p>
						</div>
					</a>
					<a href="<?= $uri['events'] ?>/item" class="card img">
						<img class="card-img-top" src="<?= $uri['root'] ?>/assets/img/events/06.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Título</h5>
							<p class="card-text extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolore.</p>
							<p class="card-text text-right"><small class="text-muted">30 de septiembre de 2018</small></p>
						</div>
					</a>
					<a href="<?= $uri['events'] ?>/item" class="card">
						<span class="tag events">Eventos</span>
						<div class="card-body">
							<h5 class="card-title">Título</h5>
							<p class="card-text extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolore.</p>
							<p class="card-text text-right"><small class="text-muted"><i><img src="<?= $uri['root'] ?>/assets/img/icon/clock.svg" alt=""></i> 30 de septiembre de 2018</small></p>
						</div>
					</a>
					<a href="<?= $uri['events'] ?>/item" class="card img">
						<img class="card-img-top" src="<?= $uri['root'] ?>/assets/img/events/07.jpg" alt="Card image cap">
						<span class="tag news">Noticias</span>
						<div class="card-body">
							<h5 class="card-title">Título</h5>
							<p class="card-text extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, dolore.</p>
							<p class="card-text text-right"><small class="text-muted"><i><img src="<?= $uri['root'] ?>/assets/img/icon/clock.svg" alt=""></i> 30 de septiembre de 2018</small></p>
						</div>
					</a>
				</div>
			</div>

			<!-- =========== Paginación ============= -->
			<div class="row">
				<div class="col-12">
					<nav aria-label="Categories navigation">
						<ul class="pagination pagination-lg justify-content-center mb-5">
							<li class="page-item previous disabled">
								<a class="page-link" href="#" tabindex="-1"><</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item next">
								<a class="page-link" href="#">></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

		</div>
	</section>
	<!-- =========== Content ============= -->

	<!-- ========= Librería =========== -->
	<section class="hero events">
		<div class="container-fluid">
			<div class="row">
				<div class="hero-content p-4 m-5">
					<div class="col-sm-12 col-md-8 col-lg-4 mx-auto">
						<h1 class="text-center font-weight-normal text-lighter featured-title">Librería El Arcano</h1>
					</div>
					<div class="col-12 mx-auto pt-lg-4">
						<h4 class="text-center font-weight-normal text-lighter">Encuentra aquí nuestra colección de libros para ti</h4>
					</div>
					<div class="col-12 pt-lg-4 text-center">
						<a href="<?= $uri['book'] ?>/" class="btn btn-primary bg-teal">Librería</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= Librería =========== -->

	<!-- ============ Frases ============== -->
	<section class="quotes">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-5 mt-3 mt-md-5 mt-xl-0 ">
					<img src="<?= $uri['root'] ?>/assets/img/img_guijarros.jpg" class="img-fluid" alt="Frases">
				</div>
				<div class="col-sm-12 col-md-6 mt-3 mt-md-5 mt-xl-6 ">
					<div class="slider quotes-content">
						<div class="quotes-item">
							<img src="<?= $uri['root'] ?>/assets/img/icon/icon_frases.png" class="img-fluid" alt="Icono Frases">
							<p class="text-blue font-weight-normal text-light">Cuanto más te conoces, más claridad hay. El autoconocimiento no tiene final -no alcanzas un logro, no llegas a una conclusión. Es un río sin final.</p>
							<h5 class="text-blue">- Anonimo -</h5>
						</div>
						<div class="quotes-item">
							<img src="<?= $uri['root'] ?>/assets/img/icon/icon_frases.png" class="img-fluid" alt="Icono Frases">
							<p class="text-blue font-weight-normal text-light">Cuanto más te conoces, más claridad hay. El autoconocimiento no tiene final -no alcanzas un logro, no llegas a una conclusión. Es un río sin final.</p>
							<h5 class="text-blue">- Anonimo -</h5>
						</div>
						<div class="quotes-item">
							<img src="<?= $uri['root'] ?>/assets/img/icon/icon_frases.png" class="img-fluid" alt="Icono Frases">
							<p class="text-blue font-weight-normal text-light">Cuanto más te conoces, más claridad hay. El autoconocimiento no tiene final -no alcanzas un logro, no llegas a una conclusión. Es un río sin final.</p>
							<h5 class="text-blue">- Anonimo -</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ Frases ============== -->

	<?php include $path['inc'] . '/subscription.php'; ?>

	<?php include $path['inc'] . '/footer.php'; ?>
