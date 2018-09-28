<?php
$titlePlage = 'Caheckout';
require __DIR__ . '/../app.php';
include $path['inc'] . '/header.php';
?>

	<!-- =========== Banner ============= -->
	<section class="hero checkout">
		<div class="container-fluid">
			<div class="row">
				<div class="hero-content p-5 m-5">
					<div class="col-sm-12 col-md-8 col-lg-4 mx-auto pt-4">
						<h2 class="text-center text-white font-weight-normal featured-title">Realizar compra</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =========== Banner ============= -->
	
	<section class="checkout py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-5 order-md-2 mb-4">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted">Productos</span>
						<span class="badge badge-secondary badge-pill">3</span>
					</h4>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between">
							<div>
								<h6 class="my-0">Product name</h6>
								<small class="text-muted">Brief description</small>
							</div>
							<span class="text-muted">$12</span>
						</li>
						<li class="list-group-item d-flex justify-content-between">
							<div>
								<h6 class="my-0">Second product</h6>
								<small class="text-muted">Brief description</small>
							</div>
							<span class="text-muted">$8</span>
						</li>
						<li class="list-group-item d-flex justify-content-between">
							<div>
								<h6 class="my-0">Third item</h6>
								<small class="text-muted">Brief description</small>
							</div>
							<span class="text-muted">$5</span>
						</li>
						<li class="list-group-item d-flex justify-content-between">
							<span>Total (USD)</span>
							<strong>$20</strong>
						</li>
					</ul>

				</div>
				<div class="col-md-7 order-md-1">
					<h4 class="mb-3">Dirección de envío</h4>
					<form class="needs-validation" novalidate>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">Nombre</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
								<div class="invalid-feedback">
									Nombre es requerido
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName">Apellido</label>
								<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
								<div class="invalid-feedback">
									Apellido es requerido
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" placeholder="you@example.com" required>
							<div class="invalid-feedback">
								Por favor ingrese un email válido
							</div>
						</div>

						<div class="mb-3">
							<label for="address">Dirección</label>
							<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
							<div class="invalid-feedback">
								Dirección es requerida
							</div>
						</div>

						<div class="row">
							<div class="col-md-5 mb-3">
								<label for="country">Ciudad</label>
								<select class="selectpicker d-block w-100" id="country" required>
									<option value="">Seleccionar...</option>
									<option>Bogotá</option>
								</select>
								<div class="invalid-feedback">
									Seleccione una ciudad
								</div>
							</div>
						</div>
						<hr class="mb-4">

						<h4 class="mb-3">Método de pago</h4>

						<div class="d-block my-3">
							<div class="custom-control custom-radio">
								<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
								<label class="custom-control-label" for="credit">Tarjeta crédito</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
								<label class="custom-control-label" for="debit">Tarjeta debito</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
								<label class="custom-control-label" for="paypal">PayPal</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="cc-name">Nombre en tarjeta</label>
								<input type="text" class="form-control" id="cc-name" placeholder="" required>
								<small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
								<div class="invalid-feedback">
									Nombre en tarjeta es requerido
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="cc-number">Número de tarjeta de crédito</label>
								<input type="text" class="form-control" id="cc-number" placeholder="" required>
								<div class="invalid-feedback">
									Número de tarjeta de crédito es requerido
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="cc-expiration">Fecha de exp.</label>
								<input type="text" class="form-control" id="cc-expiration" placeholder="" required>
								<div class="invalid-feedback">
									Fecha de exp. es requerido
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="cc-cvv">CVV</label>
								<input type="text" class="form-control" id="cc-cvv" placeholder="" required>
								<div class="invalid-feedback">
									Código de seguridad es requerido
								</div>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit">Continuar con el pago</button>
					</form>
				</div>
			</div>
		</div>
	</section>
    
	<?php include dirname(__FILE__) . '/inc/footer.php'; ?>