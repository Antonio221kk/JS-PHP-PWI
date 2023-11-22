<?php

$host = "localhost";
$user = "root";
$password = "12345";
$database = "db_company_3am";
$port = "3306";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$conn = new PDO(
    "mysql:host=$host;port=$port;dbname=$database",
    $user,
    $password,
    $options
);

//var_dump($conn);
//
//$stmt = $conn->query("SELECT * FROM products");
//
//$response = $stmt->fetchAll();
//
//var_dump($response);


