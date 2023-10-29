<?php

require "connection.php";

$name = filter_input(INPUT_GET, 'name');

$query = "SELECT * 
          FROM products 
          WHERE name LIKE :name";

$stmt = $conn->prepare($query);
$stmt->bindValue("name", "%{$name}%");
$stmt->execute();

echo json_encode($stmt->fetchAll());


