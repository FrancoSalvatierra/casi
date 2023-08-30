<?php 
// Conexion a la base de datos
$texto = "texto";
$imagen = "imagen";

include("otraconexion.php");

$consulta = mysqli_query($datos_bd, "SELECT `imagen`, `texto` FROM `tres_pibesalpe`");
while ($lista_consulta = mysqli_fetch_assoc($consulta)) {
    ?>
    <div class="consultas">
        <div class="imagen-container">
            <img class="imagen" src="<?php echo $lista_consulta["imagen"]; ?>" alt="imagen">
            <div class="botones">
                <a href="editar_imagen.php?id=<?php echo $resultado['imagen']; ?>">Editar Imagen</a>
                <a href="eliminar_t.php?id=<?php echo $resultado['id']; ?>">Eliminar Imagen</a>
            </div>
        </div>
        <p><?php echo $lista_consulta["texto"]; ?></p>
        <div class="botonesa">
            <a href="editar_texto.php?id=<?php echo $lista_consulta['id']; ?>">Editar Texto</a>
            <a href="eliminar_t.php?id=<?php echo $resultado['id']; ?>">Eliminar Texto</a>
        </div>
    </div>
    <?php            
}
?>



