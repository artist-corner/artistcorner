<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php
		include("conexion.proc.php");
		?>
		<title>Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main-obra.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Solid State</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
				
										<!--$sql_obralike = "SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 1";
											$sql_like = mysqli_query($con, $sql_obralike);
											$datoslike = mysqli_fetch_array($sql_like);
											$usercarp = $datoslike['usuario'];
											// echo $usercarp;
											$imagenlike = $datoslike['archivo'];
											// echo $imagenlike;
											$descripobra = $datoslike['descripcion'];-->

				<?php
					$sql_info = "SELECT tbl_obra.*, tbl_usuario.*, tbl_estilo_arte.*, tbl_arte.*, tbl_estilo.* FROM tbl_obra 
					INNER JOIN tbl_usuario ON tbl_usuario.id_Usuario=tbl_obra.id_Obra
					INNER JOIN tbl_estilo_arte ON tbl_estilo_arte.id_Estilo_Arte=tbl_obra.id_Estilo_Arte
					INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte=tbl_arte.id_Arte
					INNER JOIN tbl_estilo ON tbl_estilo_arte.id_Estilo=tbl_estilo.id_Estilo
					WHERE tbl_obra.id_Obra='$idObra'";
					$sql_inf = mysqli_query($con, $sql_info);
					$datos_inf = mysqli_fetch_array($sql_inf);
					$obra = $datos_inf['titulo'];
					$desc_obra = $datos_inf['descripcion'];
					$estilo = ;
				?>
					<section id="banner" class="wrap">
						<div class="inner">
							<h2>nombre de la obra</h2>
							<p>descripcion <a href="http://html5up.net">nombre del artista</a></p>
						</div>
						<div class="img">
						ofnfonfdfn
						</div>
					</section>


			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>