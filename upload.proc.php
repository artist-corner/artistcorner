<?php

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
        return $uuid;
    }
}
$GUID = getGUID();
$user=$_SESSION['usuario'];
$portada = $_FILES['portada']['name'];
$imageFileType = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
$fileName = $GUID.".".$imageFileType;
$hoy = date("Y-m-d"); 
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
include("conexion.proc.php");
$sql = "INSERT INTO tbl_obra (titulo, arte, archivo, descripcion, fecha, portada) VALUES ('$_REQUEST[titulo]', NULL, '$fileName', '$_REQUEST[descripcion]', '$hoy', '$portada')";
mysqli_query($con, $sql);
		move_uploaded_file($_FILES["file"]["tmp_name"], "usuarios/".$user."/obras\/".$fileName);
		move_uploaded_file($_FILES["portada"]["tmp_name"], "usuarios/".$user."/obras\/".$portada);


?>