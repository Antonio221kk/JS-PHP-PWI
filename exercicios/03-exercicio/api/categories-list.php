<?php

require "connection.php";

$query = "SELECT * FROM categories";
$stmt = $conn->query($query);

$response = $stmt->fetchAll();

echo json_encode($response);
