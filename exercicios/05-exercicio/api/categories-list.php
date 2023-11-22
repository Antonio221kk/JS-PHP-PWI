<?php

require "connection.php";

$query = "SELECT * FROM categories ORDER BY name ASC";
$stmt = $conn->query($query);

echo json_encode($stmt->fetchAll());
