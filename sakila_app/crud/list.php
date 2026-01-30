<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../public/login.php");
    exit;
}

require_once "../config/database.php";
$actors = $pdo->query("SELECT actor_id, first_name, last_name FROM actor")->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Actores</title>
    <link rel="stylesheet" href="../public/css/crud.css">
</head>
<body>

<div class="container">
    <h2>Actores (Sakila)</h2>

    <a href="create.php" class="button">➕ Nuevo actor</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($actors as $actor): ?>
        <tr>
            <td><?= $actor["first_name"] ?></td>
            <td><?= $actor["last_name"] ?></td>
            <td class="actions">
                <a href="edit.php?id=<?= $actor["actor_id"] ?>">Editar</a>
                <a href="delete.php?id=<?= $actor["actor_id"] ?>" class="delete"
                   onclick="return confirm('¿Eliminar actor?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
