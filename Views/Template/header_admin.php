<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?= $data['page_tag'] ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1 user-scalable=no">
	<meta name="author" content="Cenidet">
	<link rel="shortcut icon" href="<?= media() ?>/img/favicon/tecnmicono.ico">
	<title><?= $data['page_tittle'] ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?= media() ?>/css/style.css" />


	<!-- Bootstrap V5.1 -->
	<link rel="stylesheet" href="<?= media() ?>/bootstrap/css/bootstrap.min.css" />

	<!-- Iconos con Font Awesome -->
	<link rel="stylesheet" href="<?= media() ?>/files/main/css/fa-svg-with-js.css">
	<link rel="stylesheet" href="<?= media() ?>/files/main/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= media() ?>/files/main/css/estilo-compresion.min.css">
	<link rel="stylesheet" href="<?= media() ?>/files/main/css/jssorStyle.css">

	<!-- CSS Menú -->
	<link rel="stylesheet" href="<?= media() ?>/css/menu.css" />

</head>

<body>

	<!-- Barra gris Gobierno de México -->
	<nav class="navbar navvar-expand-sm fixed-top" id="barraGobmx" style="background:#6F7271;">
		<div class="container-fluid">
			<a class="navbar-brand" style="padding-left: 8px;" href="https://www.gob.mx/">
				<img src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" style="width: 8rem; margin-top: -2%; margin-bottom: -2%; margin-left: -15%;" height="29" alt="Página de inicio, Gobierno de México">
			</a>
			<div class="text-rigth barraGobmx-enlaces">
				<a href="https://www.gob.mx/gobierno" title="Gobierno" class="nav-link" style="color:#fff">
					Gobierno
				</a>
				<a href="https://www.gob.mx/participa" title="Participación Ciudadana" class="nav-link" style="color:#fff">
					Participa
				</a>
				<a href="https://datos.gob.mx" title="Datos Abiertos" class="nav-link" style="color:#fff">
					Datos
				</a>
				<a href="https://www.gob.mx/busqueda" style="color:#fff">
					<span class="sr-only">Búsqueda</span><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
						<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
					</svg>
				</a>
			</div>
		</div>
	</nav><!-- Termina Barra Griss -->

	<!-- Barra Blanca Gobierno de México -->
	<div class="u-noPaddingContainer contenedorGobierno" style="z-index:1000;">
		<div class="container-cabecera" style="padding-bottom:3px">

			<div class="row">
				<div class="col-md-12 mt-2" style="max-width:60%">
					<div class="d-inline-block ipnLogo-enlace">
						<a href="https://www.gob.mx/" target="_blank" style="z-index:2001" id="pleca_1">
							<img src="<?= media() ?>/files/main/img/pleca-gob1.png" alt="Gobierno de México" class="plecaGob gob">
						</a>
						<a href="https://www.gob.mx/sep" target="_blank" style="z-index:2001" id="pleca_2">
							<img src="<?= media() ?>/files/main/img/pleca-gob2.png" alt="Educación" class="plecaGob gob">
						</a>
						<a href="inicio.aspx" style="z-index:2001" id="pleca_3">
							<img style="width:17%;height:auto; min-width:70px" src="<?= media() ?>/files/main/img/pleca_tecnm.jpg" alt="TecNM" class="plecaTECNM">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- Termina Barra Blanca Gobierno de México -->

	<!-- Inicia navegación -->
	<?php include_once("nav_admin.php") ?>
	<!-- Termina navegación -->

</body>

</html>