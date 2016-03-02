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
							<div class="logo"><span class=""></span></div>
							<h2>ARTIST´S CORNER</h2>
							<p>COMPARTE TU ARTE, NOSOTROS LO HACEMOS POSIBLE</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">


<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">RECOMENDACIONES</h2>
									<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
									<section class="features">
										<article>
											<?php
												$sql_artistalike ="SELECT tbl_usuario.*, tbl_obra.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra GROUP BY tbl_obra.id_Usuario ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 1";
												$sql_likeart = mysqli_query($con, $sql_artistalike);
												$artistalike = mysqli_fetch_array($sql_likeart);
												$artistacarp = $artistalike['usuario'];
													//echo $artistacarp;
												$imagenartista = $artistalike['imagen'];
													//echo $imagenartista;
												$descripcionartista = $artistalike['descripcionUser'];
											echo "<a href='#' class='image'><img src='usuarios/$artistacarp/img/$imagenartista' alt='' width='400' height='250'/></a>";
											
											echo "<h3 class='major'>ARTISTA DESTACADO</h3>";
											echo $artistacarp;
											echo "<br/>";
											echo $descripcionartista;
											
											echo "<a href='#' class='special'>Ver más</a>";
											?>
										</article>
										<article>
											<?php
											$sql_obralike = "SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 1";
											$sql_like = mysqli_query($con, $sql_obralike);
											$datoslike = mysqli_fetch_array($sql_like);
											$usercarp = $datoslike['usuario'];
											// echo $usercarp;
											$imagenlike = $datoslike['archivo'];
											// echo $imagenlike;
											$descripobra = $datoslike['descripcion'];
											
											
											echo "<a href='#' class='image'><img src='usuarios/$usercarp/obras/$imagenlike' alt='' width='400' height='250'/></a>";
											
											echo "<h3 class='major'>OBRA DESTACADA</h3>";
											echo $descripobra;
											echo "<br/>";
											
											echo "<a href='#' class='special'>Ver más</a>";
											?>
										</article>
										
									</section>
									
								</div>
							</section>
						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="logos/musica.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Obras destacadas</h2>
										<?php
										$sqlmusic ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Musica' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4";
										$sqlmusic_like = mysqli_query($con, $sqlmusic);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($musiclike = mysqli_fetch_array($sqlmusic_like)) {
											echo "<img src='usuarios/$musiclike[usuario]/obras/$musiclike[portada]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>
										<a href="#" class="special">Ver más</a>
										<h2 class="major">Últimas obras</h2>
										<?php
										$sqlmusic2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Musica' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 ";
										$sqlmusic_like2 = mysqli_query($con, $sqlmusic2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($musiclike2 = mysqli_fetch_array($sqlmusic_like2)) {
											echo "<img src='usuarios/$musiclike2[usuario]/obras/$musiclike2[portada]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>

<!-- 										<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">
 -->										<a href="#" class="special">Ver más</a>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="logos/imagen.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Obras destacadas</h2>
										<?php
										$sqlpintura ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Imagen' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4 ";
										$sqlpintura_like = mysqli_query($con, $sqlpintura);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($pinturalike = mysqli_fetch_array($sqlpintura_like)) {
											echo "<img src='usuarios/$pinturalike[usuario]/obras/$pinturalike[archivo]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>


										<!-- <img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">
										 -->
										 <a href="#" class="special">Ver más</a>
										<h2 class="major">Últimas obras</h2>
										<?php
										$sqlpintura2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Imagen' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 ";
										$sqlpintura_like2 = mysqli_query($con, $sqlpintura2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($pinturalike2 = mysqli_fetch_array($sqlpintura_like2)) {
											echo "<img src='usuarios/$pinturalike2[usuario]/obras/$pinturalike2[archivo]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>

<!-- 										<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">
 -->										<a href="#" class="special">Ver más</a>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="logos/literatura.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Obras destacadas</h2>
										<?php
										$sqlliteratura ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Escritura' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4";
										$sqlliteratura_like = mysqli_query($con, $sqlliteratura);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($literaturalike = mysqli_fetch_array($sqlliteratura_like)) {
											echo "<img src='usuarios/$literaturalike[usuario]/obras/$literaturalike[portada]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>
										<!-- <img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px"> -->
										<a href="#" class="special">Ver más</a>
										<h2 class="major">Últimas obras</h2>
										<?php
										$sqlliteratura2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Escritura' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 ";
										$sqlliteratura_like2 = mysqli_query($con, $sqlliteratura2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($literaturalike2 = mysqli_fetch_array($sqlliteratura_like2)) {
											echo "<img src='usuarios/$literaturalike2[usuario]/obras/$literaturalike2[portada]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>

<!-- 										<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">
 -->										<a href="#" class="special">Ver más</a>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="continuethree" class="wrapper alt spotlight style4">
								<div class="inner">
									<a href="#" class="image"><img src="logos/video.jpg" alt="" /></a>
									<div class="content">
										<?php
										$sqlvideo ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.*, tbl_likes.id_Obra, COUNT(tbl_likes.id_like) FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte INNER JOIN tbl_likes ON tbl_likes.id_Obra = tbl_obra.id_Obra WHERE tbl_arte.nombre_Arte = 'Video' GROUP BY tbl_likes.id_Obra ORDER BY COUNT(tbl_likes.id_like) DESC LIMIT 4";
										$sqlvideo_like = mysqli_query($con, $sqlvideo);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($videolike = mysqli_fetch_array($sqlvideo_like)) {
											echo "<img src='usuarios/$videolike[usuario]/obras/$videolike[portada]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?><h2 class="major">Obras destacadas</h2>


<!-- 										<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">
 -->										<a href="#" class="special">Ver más</a>
										<h2 class="major">Últimas obras</h2>
										<?php
										$sqlvideo2 ="SELECT tbl_usuario.*, tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_usuario INNER JOIN tbl_obra ON tbl_usuario.id_Usuario = tbl_obra.id_Usuario INNER JOIN tbl_estilo_arte ON tbl_obra.id_Estilo_Arte = tbl_estilo_arte.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_estilo_arte.id_Arte = tbl_arte.id_Arte WHERE tbl_arte.nombre_Arte = 'Video' ORDER BY tbl_obra.id_Obra DESC LIMIT 4 ";
										$sqlvideo_like2 = mysqli_query($con, $sqlvideo2);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $musicarp = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($videolike2 = mysqli_fetch_array($sqlvideo_like2)) {
											echo "<img src='usuarios/$videolike2[usuario]/obras/$videolike2[portada]' width='150' height='100'/>&nbsp";
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
										}

										// echo "<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>
										// 		<img src='usuarios/$musicarp/obras/$musiclike' width='150' height='100'/>";
													

										?>
<!-- 										<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">&nbsp<img src="images/pic01.jpg" width="150px" height="100px">
 -->										<a href="#" class="special">Ver más</a>
									</div>
								</div>
							</section>

						<!-- Five -->
							

					</section>

				<!-- Footer -->
					<section id="footer">
						<center>
							<img src="img/redessociales/fb.png">
							<img src="img/redessociales/tw.png">
							<img src="img/redessociales/ins.png">
							<img src="img/redessociales/mail.png">
							<br>
							<a href="">HOME</a> | <a href="">ARTISTAS</a> | <a href="">OBRAS</a> | <a href="">AYUDA</a>
							<br>
								® Artist's Corner, 2016
							<br><br/>
						</center>
					</section>

			</div>

	</body>
</html>