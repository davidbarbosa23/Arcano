<?php
$titlePlage = 'Book Item';
require __DIR__ . '/../../app.php';
include $path['inc'] . '/header.php';
?>

	<!-- =========== Content ============= -->
	<section class="book-item">
		<div class="container-fluid">
			<div class="row book-resume">
				<div class="container">
					<div class="row p-5 pb-0">
						<div class="col-12 col-md-5 p-5">
							<div class="book-image p-0 pl-sm-5 pr-sm-5 p-md-0 pl-lg-5 pr-lg-5">
								<img src="<?= $uri['root'] ?>/assets/img/books/07.jpg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-12 col-md-7 pt-5">
							<div class="book-title mb-5">
								<h1 class="title">Leaving the sea stories</h1>
								<h5 class="author">Ben Marcus</h5>
							</div>
							<div class="book-description">
								<ul class="list-unstyled">
									<li><b class="text-blue">Fecha de Publicación:</b> 19 de Octubre, 2017</li>
									<li><b class="text-blue">ISBN:</b> 9024502505</li>
									<li><b class="text-blue">Categoría:</b> Novelas y cuentos / Otros</li>
									<li><b class="text-blue">Editorial:</b> DEBOLS!LLO.</li>
								</ul>
							</div>
							<div class="book-rating">
								<ul class="list-unstyled">
									<li> <img src="<?= $uri['root'] ?>/assets/img/icon/icon_estrella2.png" class="img-fluid" alt="1 star"> </li>
									<li> <img src="<?= $uri['root'] ?>/assets/img/icon/icon_estrella2.png" class="img-fluid" alt="2 star"> </li>
									<li> <img src="<?= $uri['root'] ?>/assets/img/icon/icon_estrella2.png" class="img-fluid" alt="3 star"> </li>
									<li> <img src="<?= $uri['root'] ?>/assets/img/icon/icon_estrella1.png" class="img-fluid" alt="4 star"> </li>
									<li> <img src="<?= $uri['root'] ?>/assets/img/icon/icon_estrella1.png" class="img-fluid" alt="5 star"> </li>
								</ul>
							</div>
							<div class="book-get-item">
								<a href="<?= $uri['root'] ?>/checkout" class="btn btn-primary bg-primary shopBook">Comprar</a>
								<h4 class="text-blue priceBook">$19.000</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row book-complete pb-6">
				<div class="container">
					<div class="row p-5">
						<div class="col-12">
							<h2 class="text-center text-blue p-3 pb-5"><span>Reseña</span></h2>
							<div class="book-extract text-light p-5 mb-4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div class="book-long-description text-light">
								<p>La presente edición reúne tres de las novelas más relevantes escritas por Yourcenar entre 1929 y 1939. Tres historias pertenecientes a su inconfundible universo, atravesadas por las mismas obsesiones y teñidas con el mismo tono gris que apela a las pasiones y derrotas más íntimas de la naturaleza humana.</p>
								<p>Estas páginas recogen los conflictos sociales de la contemporaneidad, el irrevocable paso del tiempo, la siempre acechante muerte, el amor tan doliente como hermoso, el erotismo, la impotencia del hombre ante un orden de cosas más esencial que él mismo: sutiles retazos del mundo al que pertenecemos. Estas páginas recogen los conflictos sociales de la contemporaneidad, el irrevocable paso del tiempo, la siempre acechante muerte, el amor tan doliente como hermoso, el erotismo, la impotencia del hombre ante un orden de cosas más esencial que él mismo: sutiles retazos del mundo al que pertenecemos.</p>
								<p>George Steiner dijo sobre Alexis o el tratado del inútil combate: «Un clásico... toda la composición está exquisitamente equilibrada.»</p>
							</div>
							<div class="book-share p-5">
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
