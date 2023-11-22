<?php

require "connection.php";

$idCategory = filter_input(INPUT_GET, "categoryId");

$query = "SELECT * FROM products WHERE category_id = :category_id";
$stmt = $conn->prepare($query);
$stmt->bindParam("category_id", $idCategory);
$stmt->execute();

$response = $stmt->fetchAll();

echo json_encode($response);
