<?php
require_once "../config/database.php";

$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM actor WHERE actor_id = ?");
$stmt->execute([$id]);
$actor = $stmt->fetch();

if ($_POST) {
    $stmt = $pdo->prepare(
        "UPDATE actor SET first_name=?, last_name=? WHERE actor_id=?"
    );
    $stmt->execute([$_POST["first_name"], $_POST["last_name"], $id]);
    header("Location: list.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar actor</title>
    <link rel="stylesheet" href="../public/css/crud.css">
</head>
<body>

<div class="container">
    <h2>Editar actor</h2>

    <form method="POST">
        <input name="first_name" value="<?= $actor["first_name"] ?>" required>
        <input name="last_name" value="<?= $actor["last_name"] ?>" required>
        <br><br>
        <button class="button">Actualizar</button>
        <a href="list.php" class="button">Cancelar</a>
    </form>
</div>

</body>
</html>
