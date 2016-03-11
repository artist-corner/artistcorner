<?php
session_start();
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

function getGUIDportada(){
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

$user=$_SESSION['usuario'];
$GUID = getGUID();


$imageFileType = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
$fileName = $GUID.".".$imageFileType;

$hoy = date("Y-m-d"); 
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
include("conexion.proc.php");
$sql_EstArt = "SELECT id_Estilo_Arte FROM tbl_estilo_arte WHERE id_Estilo=$_REQUEST[estilo]";
$datos_sql_EstArt = mysqli_query($con, $sql_EstArt);
if(mysqli_num_rows($datos_sql_EstArt)==1){
    $datos_resultado=mysqli_fetch_array($datos_sql_EstArt);
    // echo $datos_resultado['id_Estilo_Arte'];
}
move_uploaded_file($_FILES["file"]["tmp_name"], "usuarios/".$user."/obras\/".$fileName);
        
        if(!empty($_FILES["portada"]["tmp_name"])){
            $GUIDportada = getGUIDportada();
            $portadaType = pathinfo($_FILES['portada']['name'],PATHINFO_EXTENSION);
            $portada = $GUIDportada.".".$portadaType;
            move_uploaded_file($_FILES["portada"]["tmp_name"], "usuarios/".$user."/obras\/".$portada);
        }else{
            $portada=NULL;
        }
$sql = "INSERT INTO tbl_obra (titulo, archivo, descripcion, fecha, portada, id_Estilo_Arte, id_Usuario) VALUES ('$_REQUEST[titulo]', '$fileName', '$_REQUEST[descripcion]', '$hoy', '$portada', '$datos_resultado[id_Estilo_Arte]', '$_SESSION[id]')";
mysqli_query($con, $sql);


header("location: index.php");
?>