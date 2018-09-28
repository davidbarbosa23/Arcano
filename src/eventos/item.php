<?php
$titlePlage = 'Juancho se la sabe';
require __DIR__ . '/../../app.php';
include $path['inc'] . '/header.php';
?>

	<!-- =========== Content ============= -->
	<section class="event-item">
		<div class="container-fluid">
			<div class="row event-resume">
				<div class="background">
					<img class="" src="<?= $uri['root'] ?>/assets/img/events/items/event_02.jpg" alt="">
				</div>
				<div class="container">
					<div class="row p-5 pb-0">
						<div class="col-12 col-md-5 py-5 px-3">
							<div class="event-image p-0 pl-sm-5 pr-sm-5 p-md-0 pl-lg-5 pr-lg-5">
								<img src="<?= $uri['root'] ?>/assets/img/profile.jpg" class="img-fluid rounded-circle" alt="">
							</div>
						</div>
						<div class="col-12 col-md-7 pt-5 d-flex align-items-end">
							<div class="event-title mb-5 py-3 px-5 w-100">
								<h1 class="title">Algún evento</h1>
								<h5 class="author">Ben Marcus</h5>
								<p class="date"><b class="text-blue">Fecha:</b> 30 de septiembre de 2018</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row event-complete pb-6">
				<div class="container">
					<div class="row p-5">
						<div class="col-12">
							<h2 class="text-center text-blue p-3 pb-5"><span>Acerca de</span></h2>
							<div class="event-extract text-light p-5 mb-4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div class="event-share p-5">
								<h5 class="text-center text-blue pb-4"><span>Compartir en:</span></h5>
								<ul class="list-unstyled shareBook text-center">
									<li> <a href="#" class="icon-display twitter-share"></a> </li>
									<li> <a href="#" class="icon-display facebook-share"></a> </li>
									<li> <a href="#" class="icon-display google-share"></a> </li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =========== Content ============= -->

	<!-- =========== Slider ============= -->
	<section class="featured-books">
		<div class="container">
			<div class="row pb-5">
				<div class="col-12 bg-blue mt-5 p-4">
					<h4 class="text-center text-lighter">Recomendados</h4>
					<div class="slider recomended">
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/01.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/02.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/03.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/04.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/05.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/06.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/07.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/08.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/09.jpg" class="img-fluid" alt=""> </a> </div>
						<div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/10.jpg" class="img-fluid" alt=""> </a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =========== Slider ============= -->

	<?php include $path['inc'] . '/footer.php'; ?>
