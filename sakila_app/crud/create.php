<?php
require_once "../config/database.php";

if ($_POST) {
    $stmt = $pdo->prepare(
        "INSERT INTO actor (first_name, last_name) VALUES (?, ?)"
    );
    $stmt->execute([$_POST["first_name"], $_POST["last_name"]]);
    header("Location: list.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nuevo actor</title>
    <link rel="stylesheet" href="../public/css/crud.css">
</head>
<body>

<div class="container">
    <h2>Nuevo actor</h2>

    <form method="POST">
        <input name="first_name" placeholder="Nombre" required>
        <input name="last_name" placeholder="Apellido" required>
        <br><br>
        <button class="button">Guardar</button>
        <a href="list.php" class="button">Volver</a>
    </form>
</div>

</body>
</html>
