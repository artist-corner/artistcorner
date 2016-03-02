<script src="js/val_registro.js"></script>
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