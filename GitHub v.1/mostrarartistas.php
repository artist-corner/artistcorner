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
									<h2 class="major">Artistas</h2>
									<?php
										
										$sqlartistas ="SELECT tbl_usuario.* FROM tbl_usuario";
										$sqlartistas_like2 = mysqli_query($con, $sqlartistas);
										// $musiclike = mysqli_fetch_array($sqlmusic_like);
										// $artista = $sqlmusic_like['usuario'];
										// echo $musicarp;
										// $musiclike = $sqlmusic_like['portada'];
										// echo $musiclike;

										while ($artistaslike2 = mysqli_fetch_array($sqlartistas_like2)) {
											echo "<a href='perfil/perfil.php?art=$artistaslike2[id_Usuario]'><img src='usuarios/$artistaslike2[usuario]/img/$artistaslike2[imagen]' width='300' height='200'/></a>&nbsp";
											
											// echo "$musiclike[usuario] - $musiclike[portada]<br>";
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