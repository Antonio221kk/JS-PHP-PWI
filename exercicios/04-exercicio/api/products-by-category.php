<?php

require "connection.php";

$idCategory = filter_input(INPUT_GET, "categoryId");

$query = "SELECT * FROM products WHERE category_id = :cotegory_id";
$stmt = $conn->prepare($query);
$stmt->bindParam("cotegory_id", $idCategory);
$stmt->execute();

echo json_encode($stmt->fetchAll());
