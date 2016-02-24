<?php
	include("conexion.proc.php");
	$sql = "INSERT INTO tbl_usuario (usuario, nombre, apellidos, mail, pass, descripcion, imagen) VALUES ('$_REQUEST[usuario]', '$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[correo]', '$_REQUEST[pass]', '$_REQUEST[descripcion]', '$_REQUEST[foto]')";
	$resultado=mysqli_query($con, $sql);
	if ($resultado) {
		$carpeta_user="usuarios/".$_REQUEST['usuario'];
		$carpeta_img="usuarios/".$_REQUEST['usuario']."/img";
		$carpeta_obras="usuarios/".$_REQUEST['usuario']."/obras";
		mkdir($carpeta_user, 0700);
		mkdir($carpeta_img, 0700);
		mkdir($carpeta_obras, 0700);
	}else{
    	die('Consulta no válida: ' . mysql_error());
	}
?>