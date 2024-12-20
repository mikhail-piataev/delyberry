<?php namespace Views;

	$template = new Template();

	class Template{

		public function __construct(){
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administración de productos</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/_template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/_template/css/general.css">
	</head>
	<body>
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarContent">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Administración de Productos</a>
			</div>

			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo URL; ?>">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>productos">Ver productos</a></li>
							<li><a href="<?php echo URL; ?>productos/agregar">Agregar producto</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>usuarios">Ver usuarios</a></li>
							<li><a href="<?php echo URL; ?>usuarios/agregar">Agregar usuario</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pagos <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>pagos">Ver pagos</a></li>
							<li><a href="<?php echo URL; ?>pagos/agregar">Agregar pago</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo URL; ?>logout">Cerrar sesión</a></li>
				</ul>
			</div>
		</div>
	</nav>

<?php
		}

		public function __destruct(){
?>
	<footer class="navbar-fixed-bottom">
		Delyberry
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo URL; ?>Views/_template/js/bootstrap.js"></script>
	</body>
	</html>
<?php
		}

	}

?>
