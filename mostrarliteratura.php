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