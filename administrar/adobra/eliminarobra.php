<!DOCTYPE html>
<html>
	<head>
		<?php
		session_start();
		include("../../conexion.proc.php");

			$sql= "SELECT * FROM tbl_obra WHERE id_obra= $_REQUEST[idobra]";
			$datos = mysqli_query($con, $sql);


?>
	</head>
	<body>

				<table border>
					<tr>
						<th>Título</th>
						<th>Descripción</th>

					</tr>

					<?php

					//recorremos los resultados y los mostramos por pantalla
					//la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
					$prod = mysqli_fetch_array($datos);
					echo "<tr><td>$prod[titulo]</td><td>$prod[descripcion]</td></tr>";

					?>
					<tr>
					<td>Eliminar?</td>
					<td>
					<?php
					echo "<a href='eliminarobra.proc.php?id=$_REQUEST[id]&idobra=$_REQUEST[idobra]'>Si</a>";
					?>
					
						<?php
							echo "<a href='administrarobras.php?Usuarioid=$_REQUEST[id]'>no</a>";
						?>
					</td>
					</tr>
				</table>

					
		<br/><br/>

	</body>
</html>