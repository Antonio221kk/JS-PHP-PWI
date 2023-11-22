<?php

require "connection.php";

$bookId = filter_input(INPUT_GET,"bookId");

$query = "SELECT * FROM books WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam("id",$bookId);
$stmt->execute();

echo json_encode($stmt->fetch(), JSON_PRETTY_PRINT);