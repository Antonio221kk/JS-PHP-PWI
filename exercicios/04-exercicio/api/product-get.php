<?php

require "connection.php";

$productId = filter_input(INPUT_GET, "idProduct");

$query = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam("id",$productId);
$stmt->execute();

echo json_encode($stmt->fetch());

