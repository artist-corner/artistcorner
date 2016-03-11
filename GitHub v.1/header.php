<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Artist´s Corner</title>
		<meta charset="utf-8" />
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="buscador.css" />

		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
	<?php
	session_start();
	?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<!-- <form id="searchform">
							     <input type="text" id="buscador" placeholder="Buscar aquí..." required>
							     
							</form> -->
						<h1><a href="index.html">Artist´s Corner</a></h1>

						<nav>
							<?php 
							if(isset($_SESSION['nombre'])) {	// Sesion de un usuario	
								echo "Bienvenido, ". $_SESSION['nombre'];
							// $user=$_SESSION['nivel'];
							} elseif(isset($_SESSION['nombre'])) {		//sesion de un administrador
								echo "Bienvenido, ". $_SESSION['nombre'];
							// $user=$_SESSION['nivel'];
			} else {
				?>
				<a href="login.php">Login</a> 
				<a href="registro.php">Registrar</a>
				<?php
			}?>
							<a href="#menu">Menú</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menú</h2>
							<ul class="links">


								<?php
								if(isset($_SESSION['nivel']) && $_SESSION['nivel']==1){
									echo "<li><a href='administrar/administrar.php'>Administrar</a></li>";
								}
								?>
								<li><a href="index.php">Home</a></li>
								<li><a href="mostrarartistas.php">Artistas</a></li>
								<li><a href="mostrartodo.php">Obras</a></li>
								<?php
								if(isset($_SESSION['nombre'])) {
									?>
								<li><a href="upload.php">Publica tu obra</a></li>

								<li><?php echo "<a href='perfil/perfil.php?art=$_SESSION[id]'>Mi perfil</a></li>";
								
								}
								?>
								<li><a href="ayuda.php">Ayuda</a></li>
								<?php
								if(isset($_SESSION['nombre'])) {
									?>
								<li><a href="logout.php">Log out</a></li>
								<?php
								}
								?>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>
 
		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>