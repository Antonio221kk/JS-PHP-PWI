<?php

require "connection.php";

$query = "SELECT * FROM categories";
$stmt = $conn->query($query);

echo json_encode($stmt->fetchAll());
