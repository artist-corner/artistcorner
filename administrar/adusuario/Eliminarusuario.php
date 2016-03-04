<!DOCTYPE html>
<html>
	<head>
		<?php
		session_start();
		include("../../conexion.proc.php");

			$sql= "SELECT * FROM tbl_usuario WHERE id_usuario = $_REQUEST[id]";
			$datos = mysqli_query($con, $sql);


?>
	</head>
	<body>

				<table border>
					<tr>
						<th>Usuario</th>
						<th>Descripción</th>

					</tr>

					<?php

					//recorremos los resultados y los mostramos por pantalla
					//la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
					$prod = mysqli_fetch_array($datos);
					echo "<tr><td>$prod[usuario]</td><td>$prod[descripcionUser]</td></tr>";

					?>
					<tr>
					<td>Eliminar?</td>
					<td>
					<?php
					echo "<a href='eliminarusuario.proc.php?id=$_REQUEST[id]'>Si</a>";
					?>
					
						<?php
							echo "<a href='../administrar.php'>no</a>";
						?>
					</td>
					</tr>
				</table>

					
		<br/><br/>
	</body>
</html>