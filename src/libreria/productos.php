<?php
$titlePlage = 'Productos';
require __DIR__ . '/../../app.php';
include $path['inc'] . '/header.php';
?>

    <!-- =========== Banner ============= -->
    <section class="hero">
      <div class="container-fluid">
        <div class="row">
          <div class="hero-content p-5 m-5">

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

          </div>
        </div>
      </div>
    </section>
    <!-- =========== Banner ============= -->

    <!-- =========== Content ============= -->
    <section class="listed-books">
      <div class="container">

        <!-- =========== Título ============= -->
        <div class="row">
          <div class="col-12 p-5">
            <h1 class="text-center">"Amor"</h1>
            <h5 class="text-center text-light"><i>Resultado de busqueda - 24 resultados -</i></h5>
          </div>
        </div>

        <div class="row p-0 p-sm-5">

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-jam text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/01.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-blue text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/03.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-blue text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/04.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-lighter text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/02.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-lighter text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/05.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-jam text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/06.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-blue text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/07.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Item ============= -->
          <div class="col">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-lighter text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/08.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
              </div>
            </a>
          </div>

          <!-- =========== Last Item ============= -->
          <div class="col-12 col-md-6 col-xl-4 mx-auto">
            <a class="book-group" href="<?= $uri['book'] ?>/book-item">
              <div class="book-img bg-lighter text-center">
                <img src="<?= $uri['root'] ?>/assets/img/books/09.jpg" class="img-fluid" alt="">
              </div>
              <div class="book-caption">
                <h4 class="book-price text-center">$34.000</h4>
                <h6 class="book-title text-center">Cartas desde la isla de SKYE</h6>
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

    <?php include $path['inc'] . '/footer.php'; ?>
