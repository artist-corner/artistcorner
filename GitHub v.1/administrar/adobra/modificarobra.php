<html>
<head>
<?php
	session_start();
include("../../conexion.proc.php");




				$sql= "SELECT * FROM tbl_obra WHERE id_obra= $_REQUEST[idobra]";
				$datos = mysqli_query($con, $sql);
				$prod = mysqli_fetch_array($datos);

?>

</head>
<body>
<?php
echo "<a href='administrarobras.php?Usuarioid=$_REQUEST[id]'>Volver</a>";

	echo"<form name='f1' action='modificarobra.proc.php?idobra=$_REQUEST[idobra]&id=$_REQUEST[id]' method='post' onSubmit='return enviar;'>";

		?>
		<table>
			<tr>
				<td>Título:</td>
				<?php				
				echo "<td><input type='text' name='titulo' placeholder='titulo' value='$prod[titulo]' required/></td>";				
				?>				
			</tr>

			<tr>
				<td>Descripción</td>
				<?php
				echo "<td><textarea name='desc' rows='4' cols='50'>$prod[descripcion]</textarea></td>";
				?>				
			</td>
			<tr>
				<td> <br></td>
				<td><input type="checkbox" name="portada" value="portada">Eliminar foto de portada<td>
			</tr>
			<tr>
				<td> <br></td>
				<td><input type="checkbox" name="archivo" value="archivo">Eliminar archivo<td>
			</tr>
		</table>
				<input type="submit"/>

	</form>

</body>
</html>