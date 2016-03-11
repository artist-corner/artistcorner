<?php
	session_start();
	$likes = 0;
	include("conexion.proc.php");
	$sql = "SELECT*FROM tbl_likes WHERE id_Obra=".$_REQUEST['arc'];
	$sql_datos = mysqli_query($con, $sql);
	while ($datos = mysqli_fetch_array($sql_datos)) {
		if ($datos['id_Obra']==$_REQUEST['arc'] && $datos['usuario']==$_SESSION['id']){
			$likes++;
		}
	}
	if ($likes==0){
		$sql_sumar_like = "INSERT INTO tbl_likes (id_Obra, usuario) VALUES ('$_REQUEST[arc]', '$_SESSION[id]')";
		$sumar_like = mysqli_query($con, $sql_sumar_like);
		header("location: obra.php?art=$_REQUEST[art]&arc=$_REQUEST[arc]");

	}else{
		header("location: obra.php?art=$_REQUEST[art]&arc=$_REQUEST[arc]&ya=$ya_like");
	}
	
?>