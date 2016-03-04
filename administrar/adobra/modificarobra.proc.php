<?php
session_start();
	
include("../../conexion.proc.php");
$titulo = $_REQUEST['titulo'];
$descripcion = $_REQUEST['desc'];


	if(isset($_REQUEST['portada'])){

		if(isset($_REQUEST['archivo'])){
			// echo"las dos";
			$sql = "UPDATE tbl_obra SET titulo='$titulo', descripcion='$descripcion', portada= null, archivo= null WHERE id_Obra = $_REQUEST[idobra]";
			$resultado=mysqli_query($con, $sql);

		}else{
			// echo"solo portada";
			$sql = "UPDATE tbl_obra SET titulo='$titulo', descripcion='$descripcion', portada= null WHERE id_Obra = $_REQUEST[idobra]";
			$resultado=mysqli_query($con, $sql);	
		};
	}else{
		if(isset($_REQUEST['archivo'])){
			// echo"solo archivo";
			$sql = "UPDATE tbl_obra SET titulo='$titulo', descripcion='$descripcion', archivo= null WHERE id_Obra = $_REQUEST[idobra]";
			$resultado=mysqli_query($con, $sql);
		}else{
			// echo"ninguna";
			$sql = "UPDATE tbl_obra SET titulo='$titulo', descripcion='$descripcion' WHERE id_Obra = $_REQUEST[idobra]";
			$resultado=mysqli_query($con, $sql);
		};
	};
	$idobra=$_REQUEST['idobra'];
	$id=$_REQUEST['id'];


	// echo $sql;
	header("location:modificarobra.php?idobra=$idobra&id=$id")
?>
