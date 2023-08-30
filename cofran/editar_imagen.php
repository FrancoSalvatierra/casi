<!DOCTYPE html>
<html>
<head>
    <title>Editar Imagenes</title>
</head>
<body>
    <div class="aa">
        <form action = "guardar_img.php" method = "POST" enctype="multipart/form-data">
            <input type="text" name="texto" placeholder="Nombre...." value=""/><br></br>
            <input type="file" name="imagen"/><br></br>
            <input type="submit" name="Aceptar"/>
        </form>
    </div>
</body>
</html>