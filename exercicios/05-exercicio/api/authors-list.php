<?php

require "connection.php";

$query = "SELECT * FROM authors ORDER BY name ASC";
$stmt = $conn->query($query);

echo json_encode($stmt->fetchAll());
