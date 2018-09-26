<?php
$titlePlage = 'Calendario';
require __DIR__ . '/../../app.php';
include $path['inc'] . '/header.php';
?>

    <!-- =========== Banner ============= -->
    <section class="hero esoteric	">
      <div class="container-fluid">
        <div class="row">
          <div class="hero-content p-5 m-5">
            <form action="calendar" method="get" class="col-sm-12 col-md-10 mx-auto">
              <div class="form-group row pt-lg-5">
                <div class="col-sm-12 col-md-5 offset-md-2">
                  <select name="search" class="selectpicker form-control mb-4" data-show-subtext="true" data-live-search="true">
                    <option data-subtext="">Lírica</option>
                    <option data-subtext="">Narrativa</option>
                    <option data-subtext="">Drama</option>
                    <option data-subtext="">Novela</option>
                    <option data-subtext="">Romántica</option>
                    <option data-subtext="" disabled="disabled">Política</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-3">
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
			<div class="row">
	    		<div class="card-columns">
	    			<div class="card">
	    				<img class="card-img-top" src=".../100px160/" alt="Card image cap">
	    				<div class="card-body">
	    					<h5 class="card-title">Card title that wraps to a new line</h5>
	    					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	    				</div>
	    			</div>
	    			<div class="card p-3">
	    				<blockquote class="blockquote mb-0 card-body">
	    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
	    					<footer class="blockquote-footer">
	    						<small class="text-muted">
	    							Someone famous in <cite title="Source Title">Source Title</cite>
	    						</small>
	    					</footer>
	    				</blockquote>
	    			</div>
	    			<div class="card">
	    				<img class="card-img-top" src=".../100px160/" alt="Card image cap">
	    				<div class="card-body">
	    					<h5 class="card-title">Card title</h5>
	    					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	    					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    				</div>
	    			</div>
	    			<div class="card bg-primary text-white text-center p-3">
	    				<blockquote class="blockquote mb-0">
	    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
	    					<footer class="blockquote-footer">
	    						<small>
	    							Someone famous in <cite title="Source Title">Source Title</cite>
	    						</small>
	    					</footer>
	    				</blockquote>
	    			</div>
	    			<div class="card text-center">
	    				<div class="card-body">
	    					<h5 class="card-title">Card title</h5>
	    					<p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
	    					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    				</div>
	    			</div>
	    			<div class="card">
	    				<img class="card-img" src=".../100px260/" alt="Card image">
	    			</div>
	    			<div class="card p-3 text-right">
	    				<blockquote class="blockquote mb-0">
	    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
	    					<footer class="blockquote-footer">
	    						<small class="text-muted">
	    							Someone famous in <cite title="Source Title">Source Title</cite>
	    						</small>
	    					</footer>
	    				</blockquote>
	    			</div>
	    			<div class="card">
	    				<div class="card-body">
	    					<h5 class="card-title">Card title</h5>
	    					<p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
	    					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    				</div>
	    			</div>
	    		</div>
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

    <?php include $path['inc'] . '/subscription.php'; ?>

    <?php include $path['inc'] . '/footer.php'; ?>
