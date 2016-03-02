<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>		
		<title></title>
	    <script>
	    function cambio_tipo(){
	    	$("#est").load("upload.jquery.php", {tipus: $("#arte").val()});
	    }
	    </script>
	</head>
	<body>
		<?php
			include("conexion.proc.php");
			$sql = "SELECT id_Arte, nombre_Arte FROM tbl_arte ORDER BY id_Arte ASC";
				$res_arte=mysqli_query($con, $sql);
				?>
				<form action="upload.proc.php" enctype="multipart/form-data" method="POST">
					<input type="text" name="titulo" placeholder="titulo"><br/>
					<select name="arte" id="arte" onChange="cambio_tipo();">
						<option value="0">--Selecciona--</option>
					<?php 
					while ($row_arte = mysqli_fetch_array($res_arte))
					{
					    echo "<option value='".$row_arte['id_Arte']."'>".$row_arte['nombre_Arte']."</option>";
					}
					?>        
					</select>
					<select id='estilo' name="estilo">
						<option value="0">--Selecciona--</option>
					</select>
					<br/>
					Portada: <input type="file" name="portada"><br/>
					Archivo: <input type="file" name="file"><br/>
					<textarea name="descripcion" rows="4" cols="50"></textarea><br/>
					<input type="submit">
				</form>

			<?php
			mysqli_close($con);
		?>
	<div style='visibility:hidden;' id='est'></div>
	</body>
</html>