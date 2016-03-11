<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
						<?php
						session_start();
						include("../conexion.proc.php");
						

						$sql= "SELECT * FROM `tbl_usuario` WHERE id_Usuario = '$_SESSION[id]'";
				$datos = mysqli_query($con, $sql);
				$prod = mysqli_fetch_array($datos);

						?>
						<script src="../js/val_registro.js"></script>
				

				<!-- Wrapper -->
					<section id="wrapper">
					<section id="four" class="wrapper alt style1">
								<div class="inner">
									
								<form name="f1" action="modperfil.proc.php" method="post" onSubmit="return enviar;">
		<table>
			<tr>
				<td>Usuario:</td>
				<?php				
				echo "<td><input type='text' name='user' placeholder='Usuario' value='$prod[usuario]' required readonly/></td>";				
				?>				
			</tr>
			<tr>
				<td>Correo</td>
				<?php
				echo "<td><input type='text' name='mail' placeholder='ejemplo@ejemplo.com' value='$prod[mail]' required readonly/></td>";
				?>
			</tr>
			<tr>
				<td>Nombre: </td>
				
				<?php
				echo "<td><input type='text' name='nombre' placeholder='Nombre' value='$prod[nombre]' required/></td>";
				?>
			</tr>
			<tr>
				<td>Apellidos: </td>
				<?php				
				echo "<td><input type='text' name='apellidos' placeholder='Apellidos' value='$prod[apellido]' required/></td>";
				?>		
			</tr>

			<tr>
				<td>Contraseña: </td>
				<?php
				echo "<td><input type='password' name='pass' placeholder='Contraseña' value='$prod[pass]' required/></td>";
				?>				
			</tr>
			<tr>
				<td>Re-Contraseña: </td>
				<?php				
				echo "<td><input type='password' name='repass' placeholder='Re-Contraseña' value='$prod[pass]' required/></td>";
				?>
			</tr>

			<tr>
				<td>Descripción</td>
				<?php
				echo "<td><textarea name='desc' rows='4' cols='50'>$prod[descripcionUser]</textarea></td>";
				?>				
			</td>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto"><td>
			</tr>
		</table>
				<input type="submit" onClick="validar()"/>
				<?php echo "<a href='../perfil/perfil.php?art=$_SESSION[id]'>Volver</a>";?>
	</form>
									
								</div>
					</section>
					</section>

				<!-- Footer -->
					<section id="footer">
						<center>
							<a href="http://www.facebook.com/artistscorneres"><img src="../img/redessociales/fb.png"></a>
							<a href="http://www.twitter.com/artistscorneres"><img src="../img/redessociales/tw.png">
							<a href="http://www.instagram.com/artistscorneres"><img src="../img/redessociales/ins.png">
							<img src="../img/redessociales/mail.png">
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