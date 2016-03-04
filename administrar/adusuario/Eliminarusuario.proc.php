<?php
session_start();
	include("../../conexion.proc.php");



	$sql = "SELECT * FROM tbl_obra WHERE id_Usuario = $_REQUEST[id]";
	$datos = mysqli_query($con, $sql);

		while ($prod = mysqli_fetch_array($datos)){
		
			$sql1 = "DELETE FROM `tbl_likes` WHERE tbl_likes.id_Obra = $prod[id_Obra]";
			$resultado1=mysqli_query($con, $sql1);
		};


	$sql2 = "DELETE FROM `tbl_likes` WHERE tbl_likes.usuario = $_REQUEST[id]";
	$resultado2=mysqli_query($con, $sql2);

	
	$sql3 = "DELETE FROM `tbl_obra` WHERE id_Usuario = $_REQUEST[id]";
	$resultado3=mysqli_query($con, $sql3);


	$sql4 = "DELETE FROM `tbl_usuario` WHERE id_Usuario = $_REQUEST[id]";
	$resultado4=mysqli_query($con, $sql4);





		header("location:../administrar.php")
?>
