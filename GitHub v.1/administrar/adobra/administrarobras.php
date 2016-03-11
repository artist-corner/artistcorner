<html>
<head>
	<?php
	session_start();
	include("../../conexion.proc.php");
?>

</head>
<body>
		<?php
		if(isset($_REQUEST['idbusquedausobra'])){
			$busqueda = $_REQUEST['idbusquedausobra'];

			$sql = "SELECT tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_obra INNER JOIN tbl_estilo_arte ON tbl_estilo_arte.id_Estilo_Arte = tbl_obra.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_arte.id_Arte = tbl_estilo_arte.id_Arte WHERE tbl_obra.id_Usuario = $_REQUEST[Usuarioid] AND (UPPER(tbl_obra.titulo) LIKE UPPER('%$busqueda%') OR UPPER(tbl_arte.nombre_Arte) LIKE UPPER('%$busqueda%')) ORDER BY tbl_obra.titulo ASC";
			// echo $sql;
		}else{
			$sql = "SELECT tbl_obra.*, tbl_estilo_arte.*, tbl_arte.* FROM tbl_obra INNER JOIN tbl_estilo_arte ON tbl_estilo_arte.id_Estilo_Arte = tbl_obra.id_Estilo_Arte INNER JOIN tbl_arte ON tbl_arte.id_Arte = tbl_estilo_arte.id_Arte WHERE tbl_obra.id_Usuario = $_REQUEST[Usuarioid] ORDER BY tbl_obra.titulo ASC";
			// echo $sql;
		};
		$datos = mysqli_query($con, $sql);
		
		
		
		echo "<form action='administrarobras.php'>";
		echo "<input type='hidden' name='Usuarioid' value='$_REQUEST[Usuarioid]' />"
			?>
			Busqueda: <input type="text" name="idbusquedausobra"><br>
		<input type="submit" value="Submit">

		</form>
		<form>
			<?php
			echo "<input type='hidden' name='Usuarioid' value='$_REQUEST[Usuarioid]' />"
			?>
		<button onclick="administrarobras.php">Todo</button>
		</form>
		<a href="../administrar.php">Volver</a>

	<table border>
		<tr>
			<th>Titulo</th>
			<th>Arte</th>
			<th>archivo</th>
			<th>fecha</th>
			<th>Opciones</th>
		</tr>		
		<?php
			while ($prod = mysqli_fetch_array($datos)){
							echo "<td>";
							echo "$prod[titulo]";
							echo "</td><td>";
							echo "$prod[nombre_Arte]";
							echo "</td><td>";
							echo "$prod[archivo]";
							echo "</td><td>";
							echo "$prod[fecha]";
							echo "</td><td>";

					echo " <a href='modificarobra.php?id=$_REQUEST[Usuarioid]&idobra=$prod[id_Obra]'>Modificar</a> ";
					echo " <a href='eliminarobra.php?id=$_REQUEST[Usuarioid]&idobra=$prod[id_Obra]'>Eliminar</a>";
					echo "</td></tr>";
			};


					?>

		</table>