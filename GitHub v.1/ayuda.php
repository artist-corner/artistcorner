

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
								

									<img width="95%" src="img/imgayuda.png">

								<?php
	if(isset($error)){
		echo "ERROR: " . $error;
		echo "<br/><br/>";
	}
echo "</div>";
?>
									
								</div>
					</section>
					</section>

				<!-- Footer -->
					<section id="footer">
						<center>
							<a href="http://www.twitter.com/artistscorneres"><img src="img/redessociales/fb.png"></a>
							<a href="http://www.facebook.com/artistscorneres"><img src="img/redessociales/tw.png">
							<a href="http://www.instagram.com/artistscorneres"><img src="img/redessociales/ins.png">
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