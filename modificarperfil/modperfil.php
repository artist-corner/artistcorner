<html>
<head></head>
<?php
	session_start();
			// include("conexion.php");
			
			$modperfil=$_REQUEST['modperfil'];
$con = mysqli_connect('localhost', 'root', '', 'bd_artistscorner');

				$sql= "SELECT * FROM `tbl_usuario` WHERE id_Usuario = '$modperfil'";
				$datos = mysqli_query($con, $sql);
				$prod = mysqli_fetch_array($datos);

?>

<body>
	<form name="f1" action="modperfil.proc.php" method="post" onSubmit="return enviar;">
		<table>
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
				<td>Usuario:</td>
				<?php				
				echo "<td><input type='text' name='user' placeholder='Usuario' value='$prod[usuario]' required/></td>";				
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
				<td>Correo</td>
				<?php
				echo "<td><input type='text' name='mail' placeholder='ejemplo@ejemplo.com' value='$prod[mail]' required/></td>";
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
				<a href="">Volver</a>
	</form>

</body>
</html>