<?php

include("otraconexion.php");

$nombre = $_POST ['texto'];
$imagen = addcslashes(file_get_contents($_FILES ['imagen']['tmp_name']));

$query= "INSERT INTO tres_pibesalpe(imagen) VALUES(NULL,'$nombre','$imagen')";
$resultado = $datos_bd->query ($query);

if ($resultado){
    echo "si se inserto";
}
else{
    echo"no se inserto";
}

?>