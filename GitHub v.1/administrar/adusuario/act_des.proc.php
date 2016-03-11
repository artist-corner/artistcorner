<!DOCTYPE html>
<html>
	<head>		
	<meta charset="utf-8"/>
	<title></title>
	</head>
	<body>
		<?php
		
		include("../../conexion.proc.php");
			// $con = mysqli_connect("localhost", "root", "", "bd_artistscorner"); 
		$sql = "SELECT * FROM tbl_usuario WHERE id_Usuario = $_REQUEST[id]";

		$datos = mysqli_query($con, $sql);
		$prod=mysqli_fetch_array($datos);
		if($prod['estado']==1){
			echo "";
					$sql = "UPDATE `tbl_usuario` SET `estado`=0 WHERE id_Usuario = $_REQUEST[id]";
				} else {
					$sql = "UPDATE `tbl_usuario` SET `estado`=1 WHERE id_Usuario = $_REQUEST[id]";
				}
				$datos = mysqli_query($con, $sql);

		header("location:../administrar.php");



		?>