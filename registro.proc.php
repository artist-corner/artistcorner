<?php
	include("conexion.proc.php");
	$sql = "INSERT INTO tbl_usuario (usuario, nombre, apellido, mail, pass, descripcionUser, imagen) VALUES ('$_REQUEST[user]', '$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[mail]', '$_REQUEST[pass]', '$_REQUEST[desc]', '$_REQUEST[foto]')";
	$resultado=mysqli_query($con, $sql);
	echo $sql;
	if ($resultado) {
		$carpeta_user="usuarios/".$_REQUEST['user'];
		$carpeta_img="usuarios/".$_REQUEST['user']."/img";
		$carpeta_obras="usuarios/".$_REQUEST['user']."/obras";
		mkdir($carpeta_user, 0700);
		mkdir($carpeta_img, 0700);
		mkdir($carpeta_obras, 0700);
		move_uploaded_file($_FILES["file"]["tmp_name"], "usuarios/".$_REQUEST['user']."/img\/".$_FILES["file"]["tmp_name"]);
	}else{
    	die('Consulta no válida: ' . mysql_error());
	}
?>