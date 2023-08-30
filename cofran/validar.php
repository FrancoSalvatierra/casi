<?php
include("otraconexion.php");

$nombre = $_POST['usuario'];
$password = $_POST['password'];

$log_consult = mysqli_query($datos_bd, "SELECT * FROM `login` WHERE `nombre_usuario` = '$nombre' and `contraseña` ='$password'");
$lista_consulta = mysqli_fetch_assoc($log_consult);

if ($lista_consulta["nombre_usuario"] == $nombre) {
    header("Location: adm.php");
    exit; 
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>


