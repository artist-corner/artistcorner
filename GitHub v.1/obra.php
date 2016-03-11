<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php session_start(); ?>
	<script type="text/javascript">
		function error_likes(){
			alert("Ya has votado");
		}
	</script>
		<?php
		include("conexion.proc.php");

		?>
		<title>Artist´s Corner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main-obra.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	</head>
	<body>
		<?php
			$sql_info = "SELECT tbl_obra.*, tbl_usuario.*, tbl_estilo_arte.*, tbl_arte.*, tbl_estilo.* FROM tbl_obra 
							INNER JOIN tbl_usuario ON tbl_usuario.id_Usuario=tbl_obra.id_Usuario 
							INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte=tbl_estilo_arte.id_Estilo_Arte 
							INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte=tbl_arte.id_Arte 
							INNER JOIN tbl_estilo ON tbl_estilo_arte.id_Estilo=tbl_estilo.id_Estilo WHERE tbl_obra.id_Obra='$_REQUEST[arc]'";
			$sql_inf = mysqli_query($con, $sql_info);
			$datos_inf = mysqli_fetch_array($sql_inf);
			$obra = $datos_inf['titulo'];
			$desc_obra = $datos_inf['descripcion'];
			$archivo = $datos_inf['archivo'];
			$id_usu = $datos_inf['id_Usuario'];
			$usuObra = $datos_inf['usuario'];
			$a_portada = $datos_inf['portada'];
			$sql_likes = "SELECT COUNT(id_like) FROM tbl_likes WHERE id_Obra='$_REQUEST[arc]'";
			$sql_likes_inf = mysqli_query($con, $sql_likes);
			$datos_inf_datos = mysqli_fetch_array($sql_likes_inf);
			//$estilo = ;
		?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php"></a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menú</h2>
							<ul class="links">




								<li><a href="index.php">Home</a></li>
								<li><a href="mostrarartistas.php">Artistas</a></li>
								<li><a href="mostrartodo.php">Obras</a></li>
								<?php
								if(isset($_SESSION['nombre'])) {
									?>
								<li><a href="upload.php">Publica tu obra</a></li>
								<li><a href='perfil/perfil.php?art=$_SESSION[id]'>Mi perfil</a></li>
								<?php
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

				<!-- Banner -->
				
										<!--$sql_obralike = "SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 1";
											$sql_like = mysqli_query($con, $sql_obralike);
											$datoslike = mysqli_fetch_array($sql_like);
											$usercarp = $datoslike['usuario'];
											// echo $usercarp;
											$imagenlike = $datoslike['archivo'];
											// echo $imagenlike;
											$descripobra = $datoslike['descripcion'];-->

				
					<section id="banner" class="wrap">
						<div class="inner">
						<?php
							echo "<h2>".$obra."</h2></br>";
							echo "<h3>Descripción:</h3><p>".$desc_obra."</p>";
							echo "<a href='perfil/perfil.php?art=$id_usu'><h3>Autor:</h3><p>".$usuObra."</p></a>";
							echo "<a href='usuarios/$usuObra/obras/$archivo' download><input type='button' value='Descargar'/></a></br>";
							echo "Likes: ".$datos_inf_datos['COUNT(id_like)']."</br>";
							echo "<a href='like.proc.php?art=$_REQUEST[art]&arc=$_REQUEST[arc]'><img src='img/like.png'></a>";
							
							//echo "<a href='usuarios/$usuObra/obras/$archivo' download>";
							?>
						</div>
						<div class="img">
						<?php
							if($datos_inf['id_Arte']==1){
								echo "<img src='usuarios/$usuObra/obras/$a_portada' height='400' width='500'> <br>";
								echo "<center><audio controls height='100' width='100'>
								   	<source src='usuarios/$usuObra/obras/$archivo' type='audio/mpeg'>
								   	<source src='usuarios/$usuObra/obras/$archivo' type='audio/ogg'>
								   	<embed height='50' width='100' src='usuarios/$usuObra/obras/$archivo'>
								</audio></center>";
							}else if($datos_inf['id_Arte']==2){
								echo "<img src='usuarios/$usuObra/obras/$archivo' height='500' width='600'> <br>";
							}else if($datos_inf['id_Arte']==4){
								echo "<img src='usuarios/$usuObra/obras/$a_portada' height='400' width='500'> <br>";
								echo "<video height='400' width='500' controls>
									  <source src='usuarios/$usuObra/obras/$archivo' type='video/mp4'>
									  <source src='usuarios/$usuObra/obras/$archivo' type='video/ogg'>
									</video>";
							}else if($datos_inf['id_Arte']==3){
								$filename = "usuarios/".$usuObra."/obras/".$archivo;
								include("doc_reader.php");
								
							}
						?>
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
<?php
if(isset($_REQUEST['ya'])){
?>
	<script>
		error_likes();
	</script>
<?php
}
?>