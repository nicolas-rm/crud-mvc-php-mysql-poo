<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
	<!-- <script src="sweetalert2.all.min.js"></script> -->
	<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
</head>

<body>

	<?php
	include "Vistas/modulos/menu.php"
	?>

	<section>

		<?php
		$rutas = new RutasControlador();
		$rutas->Rutas();
		?>

	</section>

	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
</body>

</html>