<?php
$titlePlage = 'Inicio';
require __DIR__ . '/../app.php';
include $path['inc'] . '/header.php';
?>

    <!-- ============ Select section ============= -->
    <section class="container-fluid select-arcano">
      <div class="row pl-md-6 pr-md-6">
        <div class="col">
          <div class="arcano encuentros mx-auto text-center">
            <img src="<?= $uri['root'] ?>/assets/img/img_logo_casa.png" class="img-fluid logo-arcano" alt="Arcano Casa Encuentros Espirituales">
            <a href="<?= $uri['events'] ?>/" class="box-link encuentros p-4 pb-5 mt-5 mb-5">
              <div class="content text-center text-lighter pl-5 pr-5 pt-5 pt-md-6 mb-3">
                <h2 class="mx-auto">Agenda cultural de eventos </h2>
                <button type="button" class="btn btn-primary bg-primary mt-5 mt-md-6">Explora nuestra agenda</button>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="arcano libreria mx-auto text-center">
            <img src="<?= $uri['root'] ?>/assets/img/img_logo_libreria.png" class="img-fluid logo-arcano" alt="Arcano Librería Esotérica">
            <a href="<?= $uri['book'] ?>/" class="box-link libreria p-4 pb-5 mt-5 mb-5">
              <div class="content text-center text-lighter pl-5 pr-5 pt-5 pt-md-6 mb-3">
                <h2 class="mx-auto">Catálogo de libros on-line</h2>
                <button type="button" class="btn btn-primary bg-primary mt-5 mt-md-6">Explora nuestro catálogo</button>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ============ Select section ============= -->

    <?php include dirname(__FILE__) . '/inc/footer.php'; ?>
