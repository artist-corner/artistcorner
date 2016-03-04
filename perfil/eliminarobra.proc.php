<?php
session_start();
	include("../conexion.proc.php");

	$sql = "DELETE FROM `tbl_likes` WHERE id_Obra = $_REQUEST[idobra]";
	$resultado=mysqli_query($con, $sql);
	$sql2 = "DELETE FROM `tbl_obra` WHERE id_Obra = $_REQUEST[idobra]";
	$resultado2=mysqli_query($con, $sql2);




		header("location:perfil.php?namePerfil=$_REQUEST[id]#work")
?>
