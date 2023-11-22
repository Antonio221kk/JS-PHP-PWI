<?php

require "connection.php";

$bookId = filter_input(INPUT_GET,"bookId");

$query = "DELETE FROM books WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam("id",$bookId);
$stmt->execute();

if($stmt->rowCount() == 0) {
    $response = [
        "type" => "error",
        "message" => "Livro não excluído, tente novamente"
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    exit;
}

$response = [
    "type" => "success",
    "message" => "Livro excluído com sucesso"
];

echo json_encode($response, JSON_PRETTY_PRINT);


