<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
    <h1>Nuevo Contacto</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="telefono">telefono</label>
        <input type="text" name="telefono" id="telefono" required>
        <label for="email">email</label>
        <input type="text" name="email" id="email" required>
        <label for="direccion">direccion</label>
        <input type="text" name="direccion" id="direccion">
        <input type="submit" value="Save" class="saveButton">
    </form>
    
</body>
</html>