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
				<div class="card-body">
					<form id="inicioSesion">
						<h1 class="text-center">Iniciar sesión</h1>
						<div class="md-form form-lg m-4">
							<i class="fas fa-user black-text prefix"></i>
							<input type="text" class="form-control" name="usr" aria-label="Username" aria-describedby="usrAyuda" data-error="Por favor, revisa la información" required tabindex="1">
							<label for="usr" onclick="$(this).siblings('input').focus();">Usuario</label>
						</div>
						<div class="md-form form-lg m-4">
							<i class="fas fa-key black-text prefix"></i>
							<input type="password" class="form-control" name="pwd" aria-label="Username" aria-describedby="pwdAyuda" data-error="Por favor, revisa la información" required tabindex="2">
							<label for="pwd" onclick="$(this).siblings('input').focus();">Contraseña</label>
						</div>
						
						
					<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
					
					 <label for="verificacion" style="display:none;">¡Si ves esto, no completes el siguiente campo!</label> <input
name="verificacion" id="verificacion" onkeyup="validar()" style="display:none;" />

						<div class="text-center mx-auto">
							<button type="submit" class="btn btn-ingresar darken-3 mx-auto d-block" tabindex="3" id="btning">
								Ingresar
							</button>
							<label id="etiquetarob" style="color:#660708;">Falló la validación humana, no puede acceder al sitio</label>
						</div>
						</form>
						
						
							<button class="btn btn-link col-12" tabindex="4" onclick="goToRegister()">
								¿No tienes cuenta? Haz clic aquí
							</button>
							<button class="btn btn-link col-12" tabindex="5" data-toggle="modal" data-target="#cambio">
								¿Olvidaste tu contraseña? Haz clic aquí
							</button>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-3 col-sm-12"></div> -->
	</div>
	<div class="modal fade" id="cambio" tabindex="-1" role="dialog" aria-labelledby="tituloCambio" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tituloCambio">
						Cambio de contraseña
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="cambioPass">
				<div class="modal-body">
						<div class="row">
							<div class="col-12">
								<div class="md-form">
									<i class="fas fa-envelope black-text prefix"></i>
									<input type="email" name="email" id="email" class="form-control" required>
									<label for="usr" onclick="$(this).siblings('input').focus();">
										Email
									</label>
									<small class="text-muted form-text">
									Ingresa el correo electrónico que registraste para enviarte un mensaje y puedas restablecer tu contraseña.
									</small>
								</div>
							</div>
							<div class="col-12" id="mensaje"></div>
						</div>
				</div>
				<div class="modal-footer">
					<div class="row text-right">
						<button type="submit" id="btnCambio" class="btn btn-dark">
							Enviar
						</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	
	<script>
window.onload = function () {
    var campo = $('#verificacion').val();
  
   if (campo.length != 0){
     
       document.getElementById('btning').disabled=true;
       document.getElementById('etiquetarob').hidden=false;
      
      }
     else{
           document.getElementById('btning').disabled=false;
           document.getElementById('etiquetarob').hidden=true;

     }
  
  
   }	
   
 function validar(){
       var campo = $('#verificacion').val();
      if (campo.length != 0){
     
       document.getElementById('btning').disabled=true;
       document.getElementById('etiquetarob').hidden=false;
      
      }
     else{
           document.getElementById('btning').disabled=false;
           document.getElementById('etiquetarob').hidden=true;

     }
 }
   	    
</script>
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
<?php include 'admin/script.php'; ?>
<script src="/itech/js/loading-bar.js"></script>
<script src="/itech/js/login.js"></script>
</body>
</html>