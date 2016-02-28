 	<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Multiverse by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv_busqueda.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main_busqueda.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->




<!--CAMBIAR CONEXION-->

		<?php
			// include("conexion.php");
			$seleccionBusqueda=$_REQUEST['seleccionBusqueda'];
			$busqueda=$_REQUEST['busqueda'];
			$con = mysqli_connect('localhost', 'root', '', 'bd_artistscorner');
			if (!$con) {
				echo "Error: No se puede conectar a la BD." . PHP_EOL;
				exit;
			};


			if($busqueda != NULL){
				// CONSULTAS SI EL CAMPO BUSQUEDA TIENE VALOR
					switch ($seleccionBusqueda) {
			    case 1:
			        // echo "Todos";
			        $sql = "SELECT tbl_usuario.* FROM tbl_usuario WHERE UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(nombre) LIKE UPPER('%$busqueda%') OR UPPER(apellido) LIKE UPPER('%$busqueda%') OR UPPER(mail) LIKE UPPER('%$busqueda%') OR UPPER(descripcionUser) LIKE UPPER('%$busqueda%') OR UPPER(imagen) LIKE UPPER('%$busqueda%') ORDER BY usuario desc limit 30" ;
			        $sql2 = "SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(tbl_obra.titulo) LIKE UPPER('%$busqueda%') OR UPPER(tbl_obra.Arte) LIKE UPPER('%$busqueda%') OR UPPER(tbl_obra.archivo) LIKE UPPER('%$busqueda%') OR UPPER(tbl_obra.portada) LIKE UPPER('%$busqueda%') ORDER BY tbl_obra.titulo desc limit 30";
			        $datos = mysqli_query($con, $sql);
					$datos2 = mysqli_query($con, $sql2);
			        break;
			    case 2:
			        // echo "Usuario";
			        $sql = "SELECT tbl_usuario.* FROM tbl_usuario WHERE UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(nombre) LIKE UPPER('%$busqueda%') OR apellido) LIKE UPPER('%$busqueda%') OR UPPER(mail) LIKE UPPER('%$busqueda%') OR UPPER(descripcionUser) LIKE UPPER('%$busqueda%') OR UPPER(imagen) LIKE UPPER('%$busqueda%')";
			       	$datos = mysqli_query($con, $sql);
			        break;
			    case 3:
			        // echo "Obras";
			        $sql2 = "SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE  UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(titulo) LIKE UPPER('%$busqueda%') OR UPPER(Arte) LIKE UPPER('%$busqueda%') OR UPPER(archivo) LIKE UPPER('%$busqueda%') OR UPPER(portada) LIKE UPPER('%$busqueda%')";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 4:
			        // echo "Musica";
			        $sql2 = "SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Musica' AND UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(titulo) LIKE UPPER('%$busqueda%') OR UPPER(archivo) LIKE UPPER('%$busqueda%') OR UPPER(portada) LIKE UPPER('%$busqueda%')";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 5:
			        // echo "Imagen";
			        $sql2 ="SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Imagen' AND UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(titulo) LIKE UPPER('%$busqueda%') OR UPPER(archivo) LIKE UPPER('%$busqueda%') OR UPPER(portada) LIKE UPPER('%$busqueda%')";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 6:
			        // echo "Literatura";
			        $sql2 ="SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Literatura' AND UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(titulo) LIKE UPPER('%$busqueda%') OR UPPER(archivo) LIKE UPPER('%$busqueda%') OR UPPER(portada) LIKE UPPER('%$busqueda%')";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 7:
			        // echo "video";
			        $sql2 ="SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Video' AND UPPER(usuario) LIKE UPPER('%$busqueda%') OR UPPER(titulo) LIKE UPPER('%$busqueda%') OR UPPER(archivo) LIKE UPPER('%$busqueda%') OR UPPER(portada) LIKE UPPER('%$busqueda%')";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    // case 8:
			    //     echo "nada";
			        
			    //     break;
			       };

			}else{
				switch ($seleccionBusqueda) {
					// CAMPO BUSQUEDA ESTE VACIO
			    case 1:
			        // echo "Todos";
			        $sql = "SELECT tbl_usuario.* FROM tbl_usuario ORDER BY usuario desc limit 30";
			        $sql2 = "SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario ORDER BY tbl_obra.titulo desc limit 30";
			        $datos = mysqli_query($con, $sql);
					$datos2 = mysqli_query($con, $sql2);
			        break;
			    case 2:
			        // echo "Usuario";
			        $sql = "SELECT tbl_usuario.* FROM tbl_usuario ORDER BY RAND()";
			       	$datos = mysqli_query($con, $sql);
			        break;
			    case 3:
			        // echo "Obras";
			        $sql2 = "SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario ORDER BY RAND()";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 4:
			        // echo "Musica";
			        $sql2 = "SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Musica' ORDER BY RAND()";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 5:
			        // echo "Imagen";
			        $sql2 ="SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Imagen' ORDER BY RAND()";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 6:
			        // echo "Literatura";
			        $sql2 ="SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Literatura' ORDER BY RAND()";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    case 7:
			        // echo "video";
			        $sql2 ="SELECT tbl_obra.*, tbl_usuario.* FROM tbl_obra INNER JOIN tbl_usuario ON tbl_obra.id_Usuario=tbl_usuario.id_Usuario WHERE Arte = 'Video' ORDER BY RAND()";
			        $datos2 = mysqli_query($con, $sql2);
			        break;
			    // case 8:
			    //     echo "nada";
			        
			    //     break;
			    };
			};
		

		?>



	</head>
	<body>




		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><strong>Multiverse</strong> by HTML5 UP</a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon fa-info-circle">About</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<!-- //consulta para mostrar obras de la busqueda -->
						<div class=resultados>RESULTADOS</div>




<!-- Artistas -->
						<?php
					
						if (($seleccionBusqueda == '1') or ($seleccionBusqueda == '2')){
							echo "<div class=artistas>ARTISTAS</div>";
							if(mysqli_num_rows($datos)>0){
								while ($prod = mysqli_fetch_array($datos)){	       
							      
									echo "<article class='thumb'>";
										echo " <a href='seleccionbusquedas.php?namePerfil=$prod[id_Usuario]' class='image2'><img src='images/thumbs/01.jpg' alt='' /></a>";

										echo "	<h2>$prod[usuario]</h2>";
									echo "</article>";
							
								};					
							}else{
								echo "No se han encontrado artistas";
							};
						};
						?>

<!-- Obras -->
						<?php
					
						if (($seleccionBusqueda == '1') or($seleccionBusqueda == '3') or ($seleccionBusqueda == '4') or ($seleccionBusqueda == '5') or ($seleccionBusqueda == '6') or ($seleccionBusqueda == '7')){
							echo "<div class=artistas>Obras</div>";
							if(mysqli_num_rows($datos2)>0){
								while ($prod2 = mysqli_fetch_array($datos2)){	       
							      
									echo "<article class='thumb'>";
										echo " <a href='seleccionbusquedas.php?nameObra=$prod2[id_Obra]' class='image2'><img src='images/thumbs/01.jpg' alt='' /></a>";
										echo "	<h2>$prod2[titulo] | $prod2[usuario]</h2>";
									echo "</article>";
							
								};
							}else{
								echo "No se han encontrado obras";
							};
						};
						?>









<!-- 						<div class=obras>OBRAS</div>
						<article class="thumb">
							<a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt="" /></a>
							<h2>nombre de obra</h2>
							<p>descripcion de la obra</p>
						</article>
					</div> -->

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>Magna feugiat sed adipiscing</h2>
									<p>Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum eget quis orci mattis aliquet. Maecenas fringilla et ante at lorem et ipsum. Dolor nulla eu bibendum sapien. Donec non pharetra dui. Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum.</p>
								</section>
								<section>
									<h2>Follow me on ...</h2>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									&copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
								</p>
							</div>
							<div>
								<section>
									<h2>Get in touch</h2>
									<form method="post" action="#">
										<div class="field half first">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min_busqueda.js"></script>
			<script src="assets/js/jquery.poptrox.min_busqueda.js"></script>
			<script src="assets/js/skel.min_busqueda.js"></script>
			<script src="assets/js/util_busqueda.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min_busqueda.js"></script><![endif]-->
			<script src="assets/js/main_busqueda.js"></script>

	</body>
</html>