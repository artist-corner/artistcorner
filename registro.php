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
									<form name="f1" action="registro.proc.php" method="post" onSubmit="return enviar;">
		<table>
			<tr>
				<td>Nombre: </td>
				<td><input type="text" name="nombre" placeholder="Nombre" required/></td>
			</tr>
			<tr>
				<td>Apellidos: </td>
				<td><input type="text" name="apellidos" placeholder="Apellidos" required/></td>
			</tr>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="user" placeholder="Usuario" required/></td>
			</tr>
			<tr>
				<td>Contraseña: </td>
				<td><input type="password" name="pass" placeholder="Contraseña" required/></td>
			</tr>
			<tr>
				<td>Re-Contraseña: </td>
				<td><input type="password" name="repass" placeholder="Re-Contraseña" required/></td>
			</tr>
			<tr>
				<td>Correo</td>
				<td><input type="text" name="mail" placeholder="ejemplo@ejemplo.com" required/></td>
			</tr>
			<tr>
				<td>Descripción</td>
				<td><textarea name="desc" rows="4" cols="50"></textarea></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto"></td>
			</tr>
		</table>
				<input type="submit" onClick="validar()"/>
				<a href="">Volver</a>
	</form>
								</div>
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