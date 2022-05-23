<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Itech</title>
	<link rel="shortcut icon" href="/itech/favicon.ico">
	<?php include 'admin/style.php'; ?>
	<link href="/itech/css/login.css" rel="stylesheet">
</head>
<body>
<div id="contenedor_carga" class="text-center p-1 pt-4">
		<img src="img/logoitech.png" class="img-fluid imgCarga mx-auto" style="width:10%;" >
		<div class="ldBar label-center w-50" style="width:25%;height:25%;margin:1rem auto" data-value="0" data-preset="line" data-stroke-trail-width="2" data-stroke-trail="#161A1D" data-stroke="#660708" id="barra"></div>
		<h1 class="text-dark">Cargando, espere por favor...</h1>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark  transparente justify-content-center" style="background-color: #660708;">
		<a href="../" class="navbar-brand">
			<img src="img/logoitech.png" class="img-fluid" style="border-radius: 1rem; width: 6em;">
			<span class="d-none d-sm-none d-md-inline-block">Sistema de Itech</span>
		</a>
	</nav>
	<div class="container row mx-auto my-3 w-responsive">
		<!-- <div class="col-md-3 col-sm-12"></div> -->
		<div class="mx-auto my-3 w-responsive">
			<div class="card formulario">
				<div class="card-body" id="card-registro">
						<h1 class="text-center">Registrate</h1>
                        <hr>
					<form id="registrarUsuario">
						<div class="row">
                        <br>
							<h3 class="col-sm-12 text-center">Ingresa tus datos personales</h3>
                            <h6 class="col-12 text-center">En esta sección se desea obtener su información de contacto.</h6>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="md-form">
									<i class="fas fa-user-alt black-text prefix"></i>
									<input id="nombre" type="text" name="nombre" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="1" aria-describedby="nombreAyuda" required>
									<label for="nombre">Nombre</label>
									<small id="nombreAyuda" class="text-muted">
										Su nombre o nombres.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="md-form">
									<i class="fas fa-edit black-text prefix"></i>
									<input id="ape1" type="text" name="ape1" class="form-control" data-error="Por favor, escribe un apellido válido" data-success="Válido" tabindex="2" aria-describedby="ape1Ayuda" required>
									<label for="ape1">Primer apellido</label>
									<small id="ape1Ayuda" class="text-muted">
										Apellido paterno.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="md-form">
									<i class="fas fa-edit black-text prefix"></i>
									<input id="ape2" type="text" name="ape2" class="form-control" data-error="Por favor, escribe un apellido válido" data-success="Válido" tabindex="3" aria-describedby="ape2Ayuda">
									<label for="ape2">Segundo apellido</label>
									<small id="ape2Ayuda" class="text-muted">
										Apellido materno.
									</small>
								</div>
							</div>
							<!--<div class="col-sm-12 col-md-4">
								<div class="d-flex mt-4">
									<i class="far fa-id-badge prefix fa-2x mx-1"></i>
									<label for="sexo" class="blue-grey-text mx-1">Sexo</label>
									<select class="custom-select custom-select-sm d-inline" tabindex="5" required id="sexo">
											<option value="Hombre">Hombre</option>
											<option value="Mujer">Mujer</option>
									</select>
								</div>
							</div>-->
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="md-form">
									<i class="fas fa-phone black-text prefix"></i>
									<input id="tel" type="tel" name="tel" class="form-control" tabindex="4" aria-describedby="telAyuda" data-error="Ingresa un número con formato válido." data-success="Válido" minlength="7" maxlength="20">
									<label for="tel">Teléfono</label>
									<small id="telAyuda" class="text-muted">
										Número de teléfono a 10 digitos
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="md-form">
									<i class="fas fa-mobile-alt black-text prefix"></i>
									<input id="cel" type="text" name="cel" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="5" aria-describedby="celAyuda">
									<label for="cel">Celular</label>
									<small id="celAyuda" class="text-muted">
										Celular a 10 digitos.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="md-form">
									<i class="fas fa-at black-text prefix"></i>
									<input id="email" type="text" name="email" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="6" aria-describedby="emailAyuda">
									<label for="email">Email</label>
									<small id="emailAyuda" class="text-muted">
										Correo electrónico de contacto.
									</small>
								</div>
							</div>

						</div>
						<!--<div class="row mb-2">
							<div class="col-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="chckUsuario" tabindex="7">
									<label class="custom-control-label" for="chckUsuario">
										<span class="badge badge-light badge-pill ml-1">
											<i class="fas fa-angle-left mr-1"></i>
											Clic para crear usuario del trabajador en el sistema.
										</span>
									</label>
								</div>
							</div>
						</div>-->
                        <br>
                        <hr >
						<div class="row">
						    <h3 class="col-12 text-center">Datos de acceso al sistema</h3>
                            <h6 class="col-12 text-center">Escriba un nombre de usuario y contraseña para poder acceder a su cuenta personalizada.</h6>
                            
						    <div class="col-sm-12 col-md-6">
						        <div class="md-form">
						            <i class="fas fa-user black-text prefix"></i>
						            <input id="username" type="text" name="username" class="form-control" data-error="Por favor, escribe un username válido" data-success="Válido" tabindex="7" aria-describedby="usernameAyuda" onkeyup="checkUsername()">
						            <label for="username">Usuario</label>
						            <small id="usernameAyuda" class="text-muted">
						                Nombre del usuario.
						            </small>
						        </div>
						    </div>
						    <div class="col-sm-12 col-md-6" id="resultadoUsername">
						        <!-- verificar disponibilidad del usuario -->
						    </div>
						    <div class="col-sm-12 col-md-6">
						        <div class="md-form">
						            <i class="fas fa-lock black-text prefix"></i>
						            <input id="password" type="password" name="password" class="form-control" data-error="Por favor, escribe un password válido" data-success="Válido" tabindex="8" aria-describedby="passwordAyuda">
						            <label for="password">Contraseña</label>
						            <small id="passwordAyuda" class="text-muted">
						                Contraseña para el usuario.
						            </small>
						        </div>
						    </div>
						    <div class="col-sm-12 col-md-6">
						        <div class="md-form">
						            <i class="fas fa-lock  black-text prefix"></i>
						            <input id="cpass" type="password" name="cpass" class="form-control" data-error="Por favor, escribe un password válido" data-success="Válido" tabindex="9" aria-describedby="cpassAyuda">
						            <label for="cpass">Confirmar contraseña</label>
						            <small id="cpassAyuda" class="text-muted">
						                Escriba nuevamente la contraseña para confirmar.
						            </small>
						        </div>
						    </div>
						    <!--<div class="col-sm-12 col-md-12">
						        <div class="md-form">
						            <select class="custom-select mb-2" id="selectPrivilegio" name="selectPrivilegio" aria-describedby="sprivAyuda" tabindex="11">
						                <option value="0">Seleccione un tipo de usuario</option>
						                <option value="1">Administrador del sistema</option>
						                <option value="2">Usuario regular</option>
						            </select>
						            <small id="sprivAyuda" class="text-muted">
						                El tipo de usuario determinara si este podra acceder a todo el sistema o solo a la aplicación móvil.
						            </small>
						        </div>
						    </div>-->
						</div>
						<!--<div class="row mb-2">
							<div class="col-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="chckDatosExtra" tabindex="12">
									<label class="custom-control-label" for="chckDatosExtra">
										<span class="badge badge-light badge-pill ml-1">
											<i class="fas fa-angle-left mr-1"></i>
											Clic para añadir más datos personales.
										</span>
									</label>
								</div>
							</div>
						</div>
						<div class="row opcional">
							<h3 class="col-12">Dirección</h3>
							<div class="col-sm-12 col-md-6">
								<div class="md-form">
									<i class="fas fa-road prefix"></i>
									<input id="calle" type="text" name="calle" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="13" aria-describedby="calleAyuda">
									<label for="calle">Calle</label>
									<small id="calleAyuda" class="text-muted">
										Nombre de la calle.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-3">
								<div class="md-form">
									<i class="fab fa-slack-hash prefix"></i>
									<input id="num_ext" type="text" name="num_ext" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="14" aria-describedby="num_extAyuda">
									<label for="num_ext">Número exterior</label>
									<small id="num_extAyuda" class="text-muted">
										Número exterior del domicilio.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-3">
								<div class="md-form">
									<i class="fab fa-slack prefix"></i>
									<input id="num_int" type="number" name="num_int" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="15" aria-describedby="num_intAyuda">
									<label for="num_int">Número interior</label>
									<small id="num_intAyuda" class="text-muted">
										Número interior del domicilio.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="md-form">
									<i class="fas fa-building prefix"></i>
									<input id="colonia" type="number" name="colonia" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="16" aria-describedby="coloniaAyuda">
									<label for="colonia">Colonia</label>
									<small id="coloniaAyuda" class="text-muted">
										Colonia o fraccionamiento donde vive.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-5">
								<div class="md-form">
									<i class="far fa-envelope prefix"></i>
									<input id="cp" type="number" name="cp" class="form-control" data-error="Por favor, escribe un código válido" data-success="Válido" tabindex="17" aria-describedby="cpAyuda">
									<label for="cp">Código postal</label>
									<small id="cpAyuda" class="text-muted">
										Código postal de la zona.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="md-form">
									<i class="fas fa-map-marker-alt prefix"></i>
									<input id="localidad" type="text" name="localidad" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="18" aria-describedby="localidadAyuda">
									<label for="localidad">Localidad</label>
									<small id="localidadAyuda" class="text-muted">
										Localidad donde vive.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="md-form">
									<i class="fas fa-map-marker-alt prefix"></i>
									<input id="municipio" type="text" name="municipio" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="19" aria-describedby="municipioAyuda">
									<label for="municipio">Municipio</label>
									<small id="municipioAyuda" class="text-muted">
										Municipio donde vive.
									</small>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="md-form">
									<i class="fas fa-map-marker-alt prefix"></i>
									<input id="estado" type="text" name="estado" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="20" aria-describedby="estadoAyuda" value="Durango">
									<label for="estado">Estado</label>
									<small id="estadoAyuda" class="text-muted">
										Estado donde vive.
									</small>
								</div>
							</div>
							<h3 class="col-12">Otros</h3>
							<div class="col-sm-12 col-md-6">
								<div class="md-form">
									<i class="far fa-sticky-note prefix"></i>
									<input id="comentarios" type="text" name="comentarios" class="form-control" data-error="Por favor, escribe un nombre válido" data-success="Válido" tabindex="23" aria-describedby="comentariosAyuda">
									<label for="comentarios">Comentarios</label>
									<small id="comentariosAyuda" class="text-muted">
										Cualquier información extra que se desee añadir.
									</small>
								</div>
							</div>
						</div>-->
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
						<div class="text-center">
							<button type="submit" class="btn btn-dark" tabindex="10">Registrar</button>
						</div>
					</form>
					<!--<form id="inicioSesion">
						<h1 class="text-center">Formulario de registro</h1>
						<h6 class="text-center">Llena los siguientes campos para crear tu cuenta.</h6>
						<div class="md-form form-lg m-4">
							<i class="fas fa-user blue-text prefix"></i>
							<input type="text" class="form-control" name="usr" aria-label="Username" aria-describedby="usrAyuda" data-error="Por favor, revisa la información" required tabindex="1">
							<label for="usr" onclick="$(this).siblings('input').focus();">Usuario</label>
						</div>
						<div class="md-form form-lg m-4">
							<i class="fas fa-key blue-text prefix"></i>
							<input type="password" class="form-control" name="pwd" aria-label="Password" aria-describedby="pwdAyuda" data-error="Por favor, revisa la información" required tabindex="2">
							<label for="pwd" onclick="$(this).siblings('input').focus();">Contraseña</label>
						</div>
						<div class="text-center mx-auto">
							<button type="submit" class="btn blue darken-3 mx-auto d-block" tabindex="3">
								Registrar
							</button>
						</div>
					</form>-->
				</div>
			</div>
		</div>
		<!-- <div class="col-md-3 col-sm-12"></div> -->
	</div>

<?php include 'admin/script.php'; ?>
  <script src='https://www.google.com/recaptcha/api.js?render=6Le-oFAeAAAAALPCj1arLkHxtGnXoqLDrrmdEJQL'> 
</script>
<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Le-oFAeAAAAALPCj1arLkHxtGnXoqLDrrmdEJQL', {action: 'formulario'})
    .then(function(token) {
    var recaptchaResponse = document.getElementById('recaptchaResponse');
    recaptchaResponse.value = token;
    });});
</script>
<script src="/itech/js/loading-bar.js"></script>
<script src="/itech/js/login.js"></script>
</body>
</html>