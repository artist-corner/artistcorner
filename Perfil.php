<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Astral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<!-- BORRAR -->
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'bd_artistscorner');
		?>
	</head>
	<body>
		<?php

//Sentencia SQL TBL USUARIO TIPOUSUARIO OBRA
		$sql = "SELECT tbl_usuario.*, tbl_tipousuario.* FROM tbl_usuario INNER JOIN tbl_tipousuario ON tbl_usuario.id_TipoUsuario = tbl_tipousuario.id_TipoUsuario WHERE tbl_usuario.id_Usuario =$_REQUEST[namePerfil]";
		$sql2 = "SELECT tbl_usuario.*, tbl_obra.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario WHERE tbl_usuario.id_Usuario =$_REQUEST[namePerfil]";
			$datos = mysqli_query($con, $sql);
			$datos2 = mysqli_query($con, $sql2);
			$prod = mysqli_fetch_array($datos);
			?>

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="icon fa-home active"><span>Perfil</span></a>
						<a href="#work" class="icon fa-folder"><span>Galeria</span></a>
						<a href="#contact" class="icon fa-envelope"><span>Contacto</span></a>
						<a href="#" class="icon fa-twitter"><span>Twitter</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="me" class="panel">
								<header>
								<?php
								echo "<h1>$prod[usuario]</h1>";
								echo "<p>$prod[descripcionUser]</p>";	
								?>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
									<?php
									echo "<img src='images/$prod[imagen]'' alt='' />";
									?>
								</a>
							</article>

						<!-- Work -->
							<article id="work" class="panel">
								<header>
									<?php
									echo "<h2>Obras de $prod[usuario]</h2>";
									?>
								</header>
								<section>
									<div class="row">
									<?php
									if(mysqli_num_rows($datos2)>0){

										while ($prod2 = mysqli_fetch_array($datos2)){
											echo "<div class='4u 12u$(mobile)'>";
											if ("$prod2[portada]" == NULL) {
												echo "<div><a href='obra.php?id_obra=$prod2[id_Obra]' class='image fit'><img src='images/imagen1.jpg' alt=''></a></div>";
												
											}else{
											echo "<div><a href='obra.php?id_obra=$prod2[id_Obra]' class='image fit'><img src='images/$prod2[portada]' alt=''></a></div>";
											};
											echo "<div class='piedeimagen'>$prod2[titulo] / $prod2[Arte]</div>";
											echo "</div>";
											
										};
									};
									?>
									</div>
								</section>
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Contact Me</h2>
								</header>
								<form action="#" method="post">
									<div>
										<div class="row">
											<div class="6u 12u$(mobile)">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(mobile)">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="12u$">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="12u$">
												<textarea name="message" placeholder="Message" rows="8"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>