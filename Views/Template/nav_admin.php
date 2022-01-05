<div class="container">
	<div class="row">
		<header class="col-md-12 mt-2">
			<?php if ($_SESSION['userData']['id_role'] == 1) { ?>
				<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="container-fluid">

						<a class="navbar-brand" href="<?= base_url() ?>/">Inicio</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Tematics">Temática de Investigación</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Estudiantes
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Students">Datos Personales</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Documentos">Documentos</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/EstatusSolicitud">Estatus Solicitud</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Investigadores">Investigadores</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Evaluador Institucional
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Valdocumentos">Validación de Documentos</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Acerca">Acerca de</a>
								</li>

							</ul>
							<ul class="navbar-nav mb-2 mb-lg-0">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<?= $_SESSION['userData']['name']; ?>
										<?= $_SESSION['userData']['falastname']; ?>
										<?= $_SESSION['userData']['molastname']; ?>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Perfil">Perfil (<?= $_SESSION['userData']['role_name']; ?>)</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Logout">Cerrar Sesión</a></li>

									</ul>
								</li>
							</ul>

						</div>
					</div>
				</nav>
			<?php } ?>
			<?php if ($_SESSION['userData']['id_role'] == 2) { ?>
				<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="container-fluid">

						<a class="navbar-brand" href="<?= base_url() ?>/">Inicio</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link disabled" aria-current="page" href="<?= base_url() ?>/Tematics">Temática de Investigación</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Estudiantes
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Students">Datos Personales</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Documentos">Documentos</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/EstatusSolicitud">Estatus Solicitud</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Investigadores">Investigadores</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Evaluador Institucional
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Valdocumentos">Validación de Documentos</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Acerca">Acerca de</a>
								</li>

							</ul>
							<ul class="navbar-nav mb-2 mb-lg-0">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<?= $_SESSION['userData']['name']; ?>
										<?= $_SESSION['userData']['falastname']; ?>
										<?= $_SESSION['userData']['molastname']; ?>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Perfil">Perfil (<?= $_SESSION['userData']['role_name']; ?>)</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Logout">Cerrar Sesión</a></li>

									</ul>
								</li>
							</ul>

						</div>
					</div>
				</nav>
			<?php } ?>
			<?php if ($_SESSION['userData']['id_role'] == 3) { ?>
				<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="container-fluid">

						<a class="navbar-brand" href="<?= base_url() ?>/">Inicio</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link disabled" aria-current="page" href="<?= base_url() ?>/Tematics">Temática de Investigación</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Estudiantes
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Students">Datos Personales</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Documentos">Documentos</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/EstatusSolicitud">Estatus Solicitud</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled" aria-current="page" href="<?= base_url() ?>/Investigadores">Investigadores</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Evaluador Institucional
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Valdocumentos">Validación de Documentos</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Acerca">Acerca de</a>
								</li>

							</ul>
							<ul class="navbar-nav mb-2 mb-lg-0">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<?= $_SESSION['userData']['name']; ?>
										<?= $_SESSION['userData']['falastname']; ?>
										<?= $_SESSION['userData']['molastname']; ?>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Perfil">Perfil (<?= $_SESSION['userData']['role_name']; ?>)</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Logout">Cerrar Sesión</a></li>

									</ul>
								</li>
							</ul>

						</div>
					</div>
				</nav>
			<?php } ?>
			<?php if ($_SESSION['userData']['id_role'] == 4) { ?>
				<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="container-fluid">

						<a class="navbar-brand" href="<?= base_url() ?>/">Inicio</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Tematics">Temática de Investigación</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Estudiantes
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Students">Datos Personales</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Documentos">Documentos</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/EstatusSolicitud">Estatus Solicitud</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled" aria-current="page" href="<?= base_url() ?>/Investigadores">Investigadores</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Evaluador Institucional
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Valdocumentos">Validación de Documentos</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="<?= base_url() ?>/Acerca">Acerca de</a>
								</li>

							</ul>
							<ul class="navbar-nav mb-2 mb-lg-0">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<?= $_SESSION['userData']['name']; ?>
										<?= $_SESSION['userData']['falastname']; ?>
										<?= $_SESSION['userData']['molastname']; ?>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="<?= base_url() ?>/Perfil">Perfil (<?= $_SESSION['userData']['role_name']; ?>)</a></li>
										<li><a class="dropdown-item" href="<?= base_url() ?>/Logout">Cerrar Sesión</a></li>

									</ul>
								</li>
							</ul>

						</div>
					</div>
				</nav>
			<?php } ?>
		</header>

	</div>

</div>