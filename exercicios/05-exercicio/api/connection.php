<?php

$host = "mysql"; // na escola localhost
$user = "root";
$password = "asdf1234"; // na escola sem senha
$database = "db_book_store_manha";
$port = 3306;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $password, $options);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}