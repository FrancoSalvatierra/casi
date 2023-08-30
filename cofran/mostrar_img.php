<?php
// Conexion a la base de datos
$texto = "texto";
$imagen = "imagen";

include ("otraconexion.php");

$consulta = mysqli_query($datos_bd, "SELECT `imagen`,`texto` FROM `tres_pibesalpe` ");
while ($lista_consulta= mysqli_fetch_assoc($consulta) ) {
    ?>
    <div class = "consultas">
            <img class = "imagen" src ="<?php echo $lista_consulta["imagen"]; ?>">
            <p><?php echo $lista_consulta["texto"];?></p>

    </div>
    <?php            
     }
    ?>