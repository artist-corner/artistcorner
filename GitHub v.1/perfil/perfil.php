<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head>
		<title>Artist´s Corner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<!-- Cambiar Conex -->
		<?php
		session_start();

		include '../conexion.proc.php';
?>
		
	</head>
	<body>
		<?php

//Sentencia SQL TBL USUARIO TIPOUSUARIO OBRA
		$sql = "SELECT tbl_usuario.*, tbl_tipousuario.* FROM tbl_usuario INNER JOIN tbl_tipousuario ON tbl_usuario.id_TipoUsuario = tbl_tipousuario.id_TipoUsuario WHERE tbl_usuario.id_Usuario =$_REQUEST[art]";
		$sql2 = "SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_usuario.id_Usuario = $_REQUEST[art]";
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
						
					</nav>
					<?php
//Boton Modificar perfil
					if(isset($_SESSION['id'])&&$_SESSION['id']==$prod['id_Usuario']){

						echo "<a href='../modificarperfil/modperfil.php'>Modificar mi perfil!</a>";
					};
					?>
				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="me" class="panel">
								<header>
								<?php
								echo "<h1>$prod[usuario]</h1>";
								echo "<p>$prod[descripcionUser]</p>";	
								$usercarp = "$prod[usuario]";
								

								?>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
									<?php
									if ($prod['imagen'] !== NULL){
										$imagenUS = "$prod[imagen]";
										echo "<img src='../usuarios/$usercarp/img/$imagenUS' alt='' />";
									}else{
										echo "<img src='../img/NoImageuser.png' alt='' />";
									};
									
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
											$imagenObra = "$prod2[portada]";
											echo "<div class='4u 12u$(mobile)'>";
//Eliminar obra
												if(isset($_SESSION['id'])&&$_SESSION['id']==$prod['id_Usuario']){
													echo "<a href='eliminarobra.proc.php?idobra=$prod2[id_Obra]&id=$prod[id_Usuario]'>Eliminar</a>";
												};
											if ("$imagenObra" == NULL) {
												echo "<div><a href='../obra/obra.php?id_obra=$prod2[id_Obra]' class='image fit'><img style='width:250px; height:190px;' src='images/imagen1.jpg' alt=''></a></div>";
												
											}else{
											echo "<div style='width:250px; height:190px;'><a href='../obra/obra.php?id_obra=$prod2[id_Obra]' class='image fit'><img src='../img/NoImagework.png' alt=''></a></div>";
											};
											echo "<div class='piedeimagen'>$prod2[titulo] / $prod2[nombre_Arte]</div>";
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
									<h2>Contacto</h2>
								</header>
								
								<?php
									if (isset($_SESSION['id'])){
										$myusuario = $_SESSION['usuario'];
										$myemail = $_SESSION['mail'];

								?>

								<form action="http://artistscorner.esy.es/correo.php" method="Get">
									<div>
										<div class="row">
											<div class="6u 12u$(mobile)">

											<?php
												echo"<input type='text' name='name' placeholder='Nombre' value= '$myusuario' readonly/>";
												?>
											</div>
											<div class="6u$ 12u$(mobile)">
<!-- correo del usuario que tenga la sesion iniciada (oculto) -->
											<?php
												echo"<input type='text' name='emailOrigen' placeholder='Email' value='$myemail' readonly/>";
												?>
											</div>
<!-- añadir valor oculto(correo del usuario del perfil) name="emailDestino" -->
											<?php
												echo"<input type='hidden' name='emailDestino' value='$prod[mail]'>";
											?>
											<div class="12u$">
												<input type="text" name="subject" placeholder="Asunto" />
											</div>
											<div class="12u$">
												<textarea name="message" placeholder="Mensaje" rows="8"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>


								<?php

									}else{
										echo"Inicie sesión para contactar con este usuario";};


								?>

							</article>

					</div>

					
			<a href="../index.php">Volver</a>

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