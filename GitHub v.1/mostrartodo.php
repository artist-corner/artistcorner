<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
						<?php
						include("conexion.proc.php");
						include("header.php");
						?>
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class=""></span><img src="logos/logo21.png" width="550px" height="275px"></div>
							<p>COMPARTE TU ARTE, NOSOTROS LO HACEMOS POSIBLE</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">
					<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Música</h2>
									<?php
										$sqlmusic2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Musica' ORDER BY tbl_obra.id_Obra DESC ";
										$sqlmusic_like2 = mysqli_query($con, $sqlmusic2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($musiclike2 = mysqli_fetch_array($sqlmusic_like2)) {
											if(!empty($musiclike2['portada'])){
											echo "<a href='obra.php?art=$musiclike2[id_Usuario]&arc=$musiclike2[id_Obra]'><img src='usuarios/$musiclike2[usuario]/obras/$musiclike2[portada]' width='300' height='200'/></a>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
											}else{
												echo "<a href='obra.php?art=$musiclike2[id_Usuario]&arc=$musiclike2[id_Obra]'><img src='img/sinPortada.jpg' width='300' height='200'/></a>&nbsp";
											}
										}
									
									?>
									<a href="mostrarmusica.php" class="special">Ver solo Música</a>
									<h2 class="major">Imágenes</h2>
									<?php
										
										$sqlpintura2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Imagen' ORDER BY tbl_obra.id_Obra DESC  ";
										$sqlpintura_like2 = mysqli_query($con, $sqlpintura2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($pinturalike2 = mysqli_fetch_array($sqlpintura_like2)) {
											echo "<a href='obra.php?art=$pinturalike2[id_Usuario]&arc=$pinturalike2[id_Obra]'><img src='usuarios/$pinturalike2[usuario]/obras/$pinturalike2[archivo]' width='300' height='200'/></a>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>
										<a href="mostrarimagenes.php" class="special">Ver solo Imagen</a>
										<h2 class="major">Escritura</h2>
									<?php
										$sqlliteratura2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Escritura' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 ";
										$sqlliteratura_like2 = mysqli_query($con, $sqlliteratura2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($literaturalike2 = mysqli_fetch_array($sqlliteratura_like2)) {
											if(!empty($literaturalike2['portada'])){
											echo "<a href='obra.php?art=$literaturalike2[id_Usuario]&arc=$literaturalike2[id_Obra]'><img src='usuarios/$literaturalike2[usuario]/obras/$literaturalike2[portada]' width='300' height='200'/></a>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
											}else{
												echo "<a href='obra.php?art=$literaturalike2[id_Usuario]&arc=$literaturalike2[id_Obra]'><img src='img/sinPortada.jpg' width='300' height='200'/></a>&nbsp";
											}
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>
										<a href="mostrarliteratura.php" class="special">Ver solo Escritura</a>
										<h2 class="major">Video</h2>
									<?php
										$sqlvideo2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Video' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 ";
										$sqlvideo_like2 = mysqli_query($con, $sqlvideo2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($videolike2 = mysqli_fetch_array($sqlvideo_like2)) {
											if(!empty($videolike['portada'])){
											echo "<a href='obra.php?art=$videolike2[id_Usuario]&arc=$videolike2[id_Obra]'><img src='usuarios/$videolike2[usuario]/obras/$videolike2[portada]' width='300' height='200'/></a>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
											}else{
												echo "<a href='obra.php?art=$videolike2[id_Usuario]&arc=$videolike2[id_Obra]'><img src='img/sinPortada.jpg' width='300' height='200'/></a>&nbsp";
											}
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>
										<a href="mostrarvideo.php" class="special">Ver solo Video</a>
										<a href="index.php" class="special">Volver</a>
								</div>
					</section>
					</section>

				<!-- Footer -->
					<section id="footer">
						<center>
							<a href="http://www.facebook.com/artistscorneres"><img src="img/redessociales/fb.png"></a>
							<a href="http://www.twitter.com/artistscorneres"><img src="img/redessociales/tw.png">
							<a href="http://www.instagram.com/artistscorneres"><img src="img/redessociales/ins.png">
							<img src="img/redessociales/mail.png">
							<br>
							<a href="index.php">HOME</a> | <a href="">ARTISTAS</a> | <a href="">OBRAS</a> | <a href="">AYUDA</a>
							<br>
								® Artist's Corner, 2016
							<br><br/>
						</center>
					</section>

			</div>

	</body>
</html>		