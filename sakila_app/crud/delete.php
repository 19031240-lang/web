<?php
require_once "../config/database.php";

$id = $_GET["id"];
$stmt = $pdo->prepare("DELETE FROM actor WHERE actor_id = ?");
$stmt->execute([$id]);

header("Location: list.php");
