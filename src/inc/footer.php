
	<!-- ============ Footer ============= -->
	<footer class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-3 col-xl-4 pl-md-3">
				<h3 class="text-left text-blue ml-sm-1 ml-lg-6">Contacto</h3>
			</div>
			<div class="col-sm-12 col-lg-9 col-xl-8 p-5 pr-4 pr-md-6 pl-4 pl-md-6 bg-lighter">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<h6 class="text-blue">Llámanos</h6>
						<a href="#"><small><i>(+57)</i></small> 311 858 34-98</a>
						<h6 class="text-blue mt-4">¿Dónde estamos?</h6>
						<p class="text-light">Calle 56 No. 15 - 16<br><small><i>Colombia - Bogotá</i></small></p>
					</div>
					<div class="col-sm-12 col-md-4">
						<ul class="list-unstyled menu-footer">
							<li> <a href="#" class="active showLoginForm">Iniciar Sesión</a> </li>
							<li> <a href="#" class="showRegisterForm">Registrate</a> </li>
							<li> <a href="#">Nosotros</a> </li>
							<li> <a href="#">Eventos</a> </li>
							<li> <a href="#">Contacto</a> </li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-4">
						<h6 class="text-blue">Síguenos en redes</h6>
						<ul class="social-media">
							<li> <a href="#" class="icon-display facebook"></a> </li>
							<li> <a href="#" class="icon-display twitter"></a> </li>
							<li> <a href="#" class="icon-display instagram"></a> </li>
						</ul>
						<a href="#"><small><u>Terminos, condiciones y privacidad</u></small></a><br>
						<small class="text-light">® Todos los derechos reservados. El Arcano Librería 2017</small>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ============ Footer ============= -->

	<!-- ========= Ovarlay Forms ========== -->
	<section class="overlay sessionForm">
		<div class="container">
			<div class="row">
				<div class="col-12 pt-6 pb-5">
					<a href="javascript:void(0)"  class="icon-display closeForms mx-auto"></a>
				</div>
				<form class="col-12 mx-auto">
					<h2 class="text-center text-lighter pb-4">Iniciar Sesión</h2>
					<div class="form-group row mx-auto">
						<div class="col-sm-12 col-md-6 col-lg-5 mx-auto">
							<input type="email" class="form-control form-control-lg" name="" placeholder="Correo Electrónico">
						</div>
					</div>
					<div class="form-group row mx-auto">
						<div class="col-sm-12 col-md-6 col-lg-5 mx-auto">
							<input type="password" class="form-control form-control-lg" name="" placeholder="Contraseña">
						</div>
					</div>
					<div class="form-group row text-center">
						<div class="col-12 pt-4">
							<a href="#" class="text-center text-lighter"><small>Olvidé mi contraseña</small></a>
						</div>
					</div>
					<div class="form-group row ">
						<div class="col-8 offset-2 col-sm-6 offset-sm-3 col-md-3 offset-md-3 col-lg-2 offset-lg-4 mb-4">
							<button type="submit" class="btn btn btn-primary btn-block bg-primary text-blue">Iniciar Sesión</button>
						</div>
						<div class="col-8 offset-2 col-sm-6 offset-sm-3 col-md-3 offset-md-0 col-lg-2">
							<button type="button" class="btn btn btn-primary btn-block bg-primary text-blue showRegisterForm">Registrarse</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section class="overlay registerForm">
		<div class="container">
			<div class="row">
				<div class="col-12 pt-6 pb-5">
					<a href="javascript:void(0)" class="icon-display closeForms mx-auto"></a>
				</div>
				<form class="col-12 mx-auto">
					<h2 class="text-center text-lighter pb-4">Registrate</h2>
					<div class="form-group row mx-auto">
						<div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1 mx-auto">
							<input type="email" class="form-control form-control-lg mb-3" name="" placeholder="Correo Electrónico">
							<input type="password" class="form-control form-control-lg mb-3" name="" placeholder="Contraseña">
							<input type="password" class="form-control form-control-lg mb-3" name="" placeholder="Repetir Contraseña">
							<span class="text-center text-lighter"><small>Mínimo 8 carácteres, un número, una minúscula y una mayúscula.</small></span>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-5 mx-auto">
							<input type="text" class="form-control form-control-lg mb-3" name="" placeholder="Nombre">
							<input type="text" class="form-control form-control-lg mb-3" name="" placeholder="Apellido">
						</div>
					</div>
					<div class="form-check text-center pt-3 pb-3">
						<input type="checkbox" class="form-check-input" id="termsRegister">
						<label class="form-check-label text-lighter" for="termsRegister"><small>Acepto los <u>Terminos y condiciones</u></small></label>
					</div>
					<div class="form-group row ">
						<div class="col-8 offset-2 col-sm-6 offset-sm-3 col-md-3 offset-md-3 col-lg-2 offset-lg-4 mb-4">
							<button type="submit" class="btn btn btn-primary btn-block bg-primary text-blue">Registrarse</button>
						</div>
						<div class="col-8 offset-2 col-sm-6 offset-sm-3 col-md-3 offset-md-0 col-lg-2">
							<button type="button" class="btn btn btn-primary btn-block bg-primary text-blue showLoginForm">Iniciar Sesión</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- ========= Ovarlay Forms ========== -->
	
	<script src="<?= $uri['root'] ?>/assets/js/arcano.js"></script>
</body>
</html>
