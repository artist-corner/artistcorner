<html>
	<head>
		<?php
		session_start();
		include("../conexion.proc.php");	 
		
		?>
	</head>
	<body>
		<?php
		if(isset($_REQUEST['idbusquedausaurio'])){
			$busqueda = $_REQUEST['idbusquedausaurio'];

			$sql = "SELECT tbl_usuario.*, tbl_tipousuario.* FROM tbl_usuario INNER JOIN tbl_tipousuario ON tbl_tipousuario.id_TipoUsuario=tbl_usuario.id_TipoUsuario WHERE UPPER(usuario) LIKE UPPER('%$busqueda%') OR  UPPER(mail) LIKE UPPER('%$busqueda%') ORDER BY usuario ASC" ;
			// echo $sql;
		}else{
			$sql = "SELECT tbl_usuario.*, tbl_tipousuario.* FROM tbl_usuario INNER JOIN tbl_tipousuario ON tbl_tipousuario.id_TipoUsuario=tbl_usuario.id_TipoUsuario ORDER BY usuario ASC";
			// echo $sql;
		};
		$datos = mysqli_query($con, $sql);
		?>




<!-- Formulario de busqueda -->
		<form action="administrar.php">
			Busqueda: <input type="text" name="idbusquedausaurio"><br>
		<input type="submit" value="Submit">

		</form>
		<form>
		<button onclick="#">Todo</button>
		</form>



<!-- tabla de usuario -->

		<table border>
		<tr>
			<th>Usuario</th>
			<th>Correo</th>
			<th>Tipo usuario</th>
			<th>ID_Usuario</th>
			<th>Operaciones</th>
		</tr>

		<?php
			while ($prod = mysqli_fetch_array($datos)){
				echo "<td>";
				echo "<a href='adobra/administrarobras.php?Usuarioid=$prod[id_Usuario]'>$prod[usuario]</a>";
				echo "</td><td>";
				echo "$prod[mail]";
				echo "</td><td>";
				echo "$prod[nombreTipousuario]";
				echo "</td><td>";
				echo "$prod[id_Usuario]";
				echo "</td><td>";
	//Programacion botones operaciones
	//Activar desactivar Usuario
				if($prod['estado']==1){
					echo " <a href='adusuario/act_des.proc.php?id=$prod[id_Usuario]'>Desctivar</a> ";
				} else {
					echo " <a href='adusuario/act_des.proc.php?id=$prod[id_Usuario]'>Activar</a> ";
				};
				
					echo " <a href='adusuario/modificarusuario.php?id=$prod[id_Usuario]'>Modificar</a> ";
					echo " <a href='adusuario/Eliminarusuario.php?id=$prod[id_Usuario]'>Eliminar</a> ";
					echo "</td></tr>";
			};					

		?>

		</table>



	</body>
</html>