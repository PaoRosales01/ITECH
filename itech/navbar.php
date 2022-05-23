<nav class="navbar navbar-expand-lg navbar-dark grey darken-4">
		<a href="/itech/admin/" class="navbar-brand">
			<img src="/itech/img/brand.png" class="img-fluid" style="border-radius: 1rem; width: 7rem;">
		</a>
		<span class="text-white font-weight-bold h6-responsive">
			<span class="d-none d-sm-none d-md-inline-block">
				Sistema de itech Construcciones
			</span> 
		</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars fa-lg"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="nav">
			<ul class="navbar-nav">
				<li class="nav-item m-1 d-sm-block d-md-none">
					<a href="/itech/admin/" class="nav-link rounded blue accent-4">
						<i class="fas fa-home fa-lg"></i>Inicio
					</a>
				</li>
				<!-- Citas -->
				<li class="nav-item m-1 d-sm-block d-md-none">
					<div class="dropdown">
						<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false" id="btnClientes">
							<i class="fas fa-bell fa-lg mr-1"></i>Buzón
						</a>
						<div class="dropdown-menu" aria-labelledby="btnClientes">
							<a href="/itech/admin/buzon/citas.php" class="dropdown-item">
								<i class="fas fa-calendar fa-lg mr-1"></i>Citas
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/buzon/mensajes.php" class="dropdown-item">
								<i class="fas fa-envelope fa-lg mr-1"></i>Mensajes
							</a>
						</div>
					</div>
				</li>
				<!-- Clientes -->
				<li class="nav-item m-1 d-sm-block d-md-none">
					<div class="dropdown">
						<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false" id="btnClientes">
							<i class="fas fa-users fa-lg mr-1"></i>Clientes
						</a>
						<div class="dropdown-menu" aria-labelledby="btnClientes">
							<a href="/itech/admin/clientes/nuevo.php" class="dropdown-item">
								<i class="fas fa-plus fa-lg mr-1"></i>Nuevo
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/clientes/" class="dropdown-item">
								<i class="fas fa-toolbox fa-lg mr-1"></i>Administrar
							</a>
						</div>
					</div>
				</li>
				<!-- Proveedores -->
				<li class="nav-item m-1 d-sm-block d-md-none">
					<div class="dropdown">
						<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false" id="btnProveedores">
							<i class="fas fa-store-alt fa-lg mr-1"></i>Proveedores
						</a>
						<div class="dropdown-menu" aria-labelledby="btnProveedores">
							<a href="/itech/admin/proveedores/nuevo.php" class="dropdown-item">
								<i class="fas fa-plus fa-lg mr-1"></i>Nuevo
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/proveedores/" class="dropdown-item">
								<i class="fas fa-toolbox fa-lg mr-1"></i>Administrar
							</a>
						</div>
					</div>
				</li>
				<!-- Empleados -->
				<li class="nav-item m-1 d-sm-block d-md-none">
					<div class="dropdown">
						<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false" id="btnEmpleados">
							<i class="fas fa-user-alt fa-lg mr-1"></i>Empleados
						</a>
						<div class="dropdown-menu" aria-labelledby="btnEmpleados">
							<a href="/itech/admin/empleados/nuevo.php" class="dropdown-item">
								<i class="fas fa-plus fa-lg mr-1"></i>Nuevo
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/empleados/" class="dropdown-item">
								<i class="fas fa-toolbox fa-lg mr-1"></i>Administrar
							</a>
						</div>
					</div>
				</li>
							<!-- Redes -->
				<li class="nav-item m-1 d-sm-block d-md-none">
					<div class="dropdown">
						<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false" id="btnEmpleados">
							<i class="fas fa-user-alt fa-lg mr-1"></i>Redes Sociales
						</a>
						<div class="dropdown-menu" aria-labelledby="btnEmpleados">
							<a href="/itech/admin/redes/" class="dropdown-item">
								<i class="fa fa-facebook-square fa-lg mr-1"></i>Facebook
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/redes/" class="dropdown-item">
								<i class="fas fa-toolbox fa-lg mr-1"></i>Administrar
							</a>
						</div>
					</div>
				</li>
				<!-- SITIO WEB-->
				<li class="nav-item m-1 d-sm-block d-md-none">
					<div class="dropdown">
						<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-hashpopup="true" aria-expanded="false" id="btnVentas">
							<i class="fa fa-globe" aria-hidden="true"></i>Sitio web
						</a>
						<div class="dropdown-menu" aria-labelledby="btnVentas">
							<a href="/itech/admin/sitioweb/nosotros/index.php" class="dropdown-item">
								<i class="fas fa-users"></i>Nosotros
							</a>
							<a href="/itech/admin/sitioweb/servicios/index.php" class="dropdown-item">
								<i class="fa fa-briefcase" aria-hidden="true"></i> Servicios
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/sitioweb/promociones/index.php" class="dropdown-item">
								<i class="fas fa-tags"></i> Promociones
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/sitioweb/galeria/index.php" class="dropdown-item">
								<i class="far fa-images"></i> Galería
							</a>
							<div class="dropdown-divider"></div>
							<a href="/itech/admin/sitioweb/contacto/index.php" class="dropdown-item">
								<i class="fas fa-map-marker-alt"></i> Contacto
							</a>
							
						</div>
					</div>
				</li>
				<!-- FIN SITIO WEB-->
				<!-- Cerrar sesión -->
				<li class="nav-item mx-2 my-0">
					<a href="/itech/admin/logout.php" class="nav-link rounded my-2 text-center blue darken-3">
						<i class="fas fa-sign-out-alt fa-lg"></i>Cerrar sesión
					</a>
				</li>
			</ul>
		</div>
	</nav>