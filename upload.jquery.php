<?php
	include("conexion.proc.php");

	$sql_est="SELECT tbl_estilo_arte.*, tbl_estilo.* FROM (tbl_estilo_arte INNER JOIN tbl_estilo ON tbl_estilo_arte.id_Estilo=tbl_estilo.id_Estilo) WHERE tbl_estilo_arte.id_Arte=".$_REQUEST['tipus'];
	$datos = mysqli_query($con, $sql_est);
	echo "<script>document.getElementById('estilo').options.length=1;</script>";

	while($datos_estilo=mysqli_fetch_array($datos)){
		echo "<script>document.getElementById('estilo').options[document.getElementById('estilo').options.length]=new Option('".$datos_estilo['Nombre_Estilo']."', ".$datos_estilo['id_Estilo'].");</script>";
	}

	mysqli_close($con);
?>