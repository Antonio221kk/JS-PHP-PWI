<?php

require "connection.php";

$categoryId = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);

$query = "SELECT * FROM books WHERE books.category_id = :category_id";
$stmt = $conn->prepare($query);
$stmt->bindParam('category_id', $categoryId);
$stmt->execute();
$books = $stmt->fetchAll();

echo json_encode($books);
