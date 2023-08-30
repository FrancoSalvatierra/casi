<?php

include("otraconexion.php");

//$nombre = $_POST ['imagen'];
$id = $_REQUEST ['id'];


$query= "DELETE FROM tres_pibesalpe WHERE id ='$id'";
$resultado = $datos_bd->query ($query);

if ($resultado){
    echo "si se elimino";
}
else{
    echo "no se elimino jajnt";
}

?>