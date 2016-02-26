<form name="f1" action="" method="post" onSubmit="return enviar;">
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
				<td><input type="text" name="nom" placeholder="Usuario" required/></td>
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
				<td>Foto</td>
				<td><input type="file" name="foto"><td>
			</tr>
		</table>
				<input type="submit" onClick="validar()"/>
				<a href="index.php">Volver</a>
	</form>
</body>
</html>