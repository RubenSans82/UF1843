<?php


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>
    <h1>Lista de Contactos</h1>
    <table class="contact_list">
        <tr>
            <th>ID Contacto</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Fecha de Creacion</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($data as $contact) {
            echo "<tr>";
            echo "<td>$contact->contactos_id</td>";
            echo "<td>$contact->nombre</td>";
            echo "<td>$contact->telefono</td>";
            echo "<td>$contact->email</td>";
            echo "<td>$contact->direccion</td>";
            echo "<td>$contact->fecha_creacion</td>";
            echo "<td><a href='/UF1843/contact/edit/$contact->contactos_id'>Edit</a> <a href='/UF1843/contact/delete/$contact->contactos_id'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="/UF1843/contact/new" id="newContact">Nuevo Contacto</a>

</body>

</html>