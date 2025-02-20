<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
    <h1>Editar Contacto</h1>
    <form action="" method="POST">
        <input type="text" name="nombre" value="<?= $data->nombre ?>"><br>
        <input type="text" name="telefono" value="<?= $data->telefono ?>"><br>        
        <input type="text" name="email" value="<?= $data->email ?>"><br>
        <input type="text" name="direccion" value="<?= $data->direccion ?>"><br>
        <input type="submit" value="Save" class="saveButton">
    </form>
    
</body>
</html>