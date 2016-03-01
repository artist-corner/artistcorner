<?php
session_start();
	// include("conexion.proc.php");
$con = mysqli_connect('localhost', 'root', '', 'bd_artistscorner');
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellidos'];
$pass = $_REQUEST['pass'];
$repass = $_REQUEST['repass'];
$descripcion = $_REQUEST['desc'];
$foto = $_REQUEST['foto'];
if ($pass == $repass){
	if($_REQUEST['foto'] == NULL){
		
	echo "no imagen";
	$sql = "UPDATE tbl_usuario SET nombre='$nombre', apellido='$apellido', pass='$pass', descripcionUser='$descripcion' WHERE id_Usuario = $_SESSION[id]";
	$resultado=mysqli_query($con, $sql);
	}else{
	// echo " imagen";
	$sql = "UPDATE tbl_usuario SET nombre='$nombre', apellido='$apellido', pass='$pass', descripcionUser='$descripcion', imagen='$foto' WHERE id_Usuario = $_SESSION[id]";
	$resultado=mysqli_query($con, $sql);
	};
}else{
	echo "ERROR: Las contraseñas no coinciden";
};







	echo $sql;
	echo "<a href='modperfil.php'>Volver</a>";
?>