<?php
session_start();
	
include("../../conexion.proc.php");
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellidos'];
$pass = $_REQUEST['pass'];
$repass = $_REQUEST['repass'];
$descripcion = $_REQUEST['desc'];


	if(isset($_REQUEST['foto'])){
	$sql = "UPDATE tbl_usuario SET nombre='$nombre', apellido='$apellido', pass='$pass', descripcionUser='$descripcion', imagen= null WHERE id_Usuario = $_REQUEST[id]";
	$resultado=mysqli_query($con, $sql);	

	}else{
	echo "no imagen";
	$sql = "UPDATE tbl_usuario SET nombre='$nombre', apellido='$apellido', pass='$pass', descripcionUser='$descripcion' WHERE id_Usuario = $_REQUEST[id]";
	$resultado=mysqli_query($con, $sql);

	};

	$id=$_REQUEST['id'];


	// echo $sql;
	header("location:modificarusuario.php?id=$id")
?>



