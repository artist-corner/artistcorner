

<!DOCTYPE HTML>

<html>
	<head>
		<script>
		function cambio_tipo(){
		    	$("#est").load("upload.jquery.php", {tipus: $("#arte").val()});
		    }
		    </script>
	</head>
	<body>
						<?php
						include("conexion.proc.php");
						include("header.php");
						?>
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
														<div class="logo"><span class=""></span><img src="logos/logo21.png" width="550px" height="275px"></div>

							<p>COMPARTE TU ARTE, NOSOTROS LO HACEMOS POSIBLE</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">
					<section id="four" class="wrapper alt style1">
								<div class="inner">
								<h1>PUBLICA TU OBRA</h1><br>
									
									<?php
			include("conexion.proc.php");
			$sql = "SELECT id_Arte, nombre_Arte FROM tbl_arte ORDER BY id_Arte ASC";
				$res_arte=mysqli_query($con, $sql);
				?>
				<form action="upload.proc.php" enctype="multipart/form-data" method="POST">
					<input type="text" name="titulo" placeholder="titulo"><br/>
					<select name="arte" id="arte" onChange="cambio_tipo();">
						<option value="0">Selecciona Arte</option><br/><br/>
					<?php 
					while ($row_arte = mysqli_fetch_array($res_arte))
					{
					    echo "<option value='".$row_arte['id_Arte']."'>".$row_arte['nombre_Arte']."</option>";
					}
					?>        
					</select>
					<select id='estilo' name="estilo">
						<option value="0">Selecciona Estilo</option><br/>
					</select>
					<br/>
					Portada: <input type="file" name="portada"><br/><br/>
					Archivo: <input type="file" name="file"><br/><br/>
					Descripción
					<textarea name="descripcion" rows="4" cols="50"></textarea><br/>
					<input type="submit"><a href="">Subir archivo</a>
				</form>

			<?php
			mysqli_close($con);
		?>
	<div style='visibility:hidden;' id='est'></div>

								<?php
	if(isset($error)){
		echo "ERROR: " . $error;
		echo "<br/><br/>";
	}
echo "</div>";
?>
									
								</div>
					</section>
					</section>

				<!-- Footer -->
					<section id="footer">
						<center>
							<a href="http://www.facebook.com/artistscorneres"><img src="img/redessociales/fb.png"></a>
							<a href="http://www.twitter.com/artistscorneres"><img src="img/redessociales/tw.png"></a>
							<a href="http://www.instagram.com/artistscorneres"><img src="img/redessociales/ins.png"></a>
							<img src="img/redessociales/mail.png">
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