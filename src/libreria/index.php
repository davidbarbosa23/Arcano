<?php
$titlePlage = 'Librería Esotérica';
require __DIR__ . '/../../app.php';
include $path['inc'] . '/header.php';
?>

    <!-- =========== Banner ============= -->
    <section class="hero">
      <div class="container-fluid">
        <div class="row">
          <div class="hero-content p-5 m-5">
            <div class="col-sm-12 col-md-8 col-lg-4 mx-auto pt-5">
              <h2 class="text-center text-blue font-weight-normal featured-title">Un espacio que te invita a conectar con tu interior</h2>
            </div>

            <form action="productos" method="get" class="col-sm-12 col-md-10 mx-auto">
              <div class="form-group row pt-lg-5">
                <div class="col-sm-12 col-md-3 offset-md-2">
                  <select name="category" class="selectpicker form-control mb-4" data-show-subtext="true" data-live-search="true">
                  	<optgroup label="Categoría">
	                    <option data-subtext="">Lírica</option>
	                    <option data-subtext="">Narrativa</option>
	                    <option data-subtext="">Drama</option>
	                    <option data-subtext="">Novela</option>
	                    <option data-subtext="">Romántica</option>
                    </optgroup>
                  </select>
                </div>
                <div class="col-sm-12 col-md-3">
                	<input type="text" name="search" class="form-control form-control-lg mb-4">
                </div>
                <div class="col-sm-12 col-md-2">
                  <button type="submit" class="btn btn-primary btn-block bg-primary">Buscar</button>
                </div>
              </div>
            </form>

            <div class="col-12 pt-lg-5">
              <a href="#" class="icon-display scroll-next scroll-bottom mx-auto"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =========== Banner ============= -->

    <!-- =========== Sliders ============= -->
    <section class="featured-books">
      <div class="container">
        <div class="row pb-0 pb-sm-5">
          <div class="col-xs-12 col-md-8 mt-0 mt-sm-5 p-4 bg-lighter news">
            <h4 class="text-center text-blue mb-2 mb-xl-5">Novedades</h4>

            <div class="slider news">
              <div> <a href="<?= $uri['book'] ?>/novedades" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/01.jpg" class="img-fluid" alt=""> </a> </div>
              <div> <a href="<?= $uri['book'] ?>/novedades" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/02.jpg" class="img-fluid" alt=""> </a> </div>
              <div> <a href="<?= $uri['book'] ?>/novedades" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/03.jpg" class="img-fluid" alt=""> </a> </div>
              <div> <a href="<?= $uri['book'] ?>/novedades" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/04.jpg" class="img-fluid" alt=""> </a> </div>
            </div>

          </div>
          <div class="col-xs-12 col-md-4 mt-0 mt-sm-5 ">
            <div class="row">
              <div class="col-sm-12 col-md-11 offset-md-1 bg-jam p-4">
                <h4 class="text-center text-lighter">Más Vendidos</h4>

                <div class="slider best-seller">
                  <div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/06.jpg" class="img-fluid" alt=""> </a> </div>
                  <div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/07.jpg" class="img-fluid" alt=""> </a> </div>
                  <div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/08.jpg" class="img-fluid" alt=""> </a> </div>
                  <div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/09.jpg" class="img-fluid" alt=""> </a> </div>
                  <div> <a href="#" class="books"> <img src="<?= $uri['root'] ?>/assets/img/books/10.jpg" class="img-fluid" alt=""> </a> </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-12 bg-blue mt-0 mt-sm-5  p-4">
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
    <!-- =========== Sliders ============= -->

    <!-- ========= Programación =========== -->
    <section class="hero calendar">
      <div class="container-fluid">
        <div class="row">
          <div class="hero-content p-4 m-5">
            <div class="col-sm-12 col-md-8 col-lg-4 mx-auto">
              <h1 class="text-center font-weight-normal text-lighter featured-title">Casa El Arcano</h1>
            </div>
            <div class="col-12 mx-auto pt-lg-4">
              <h4 class="text-center font-weight-normal text-lighter">Encuentra aquí toda la programación de eventos</h4>
            </div>
            <div class="col-12 pt-lg-4 text-center">
              <a href="<?= $uri['events'] ?>/" class="btn btn-primary bg-teal">Programación</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========= Programación =========== -->

    <!-- ============ Frases ============== -->
    <section class="quotes">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-5 mt-3 mt-md-5 mt-xl-0 ">
            <img src="<?= $uri['root'] ?>/assets/img/img_bambu.jpg" class="img-fluid" alt="Frases">
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
