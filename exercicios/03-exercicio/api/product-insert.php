<?php

require "connection.php";

$post = filter_input_array(INPUT_POST);

$query = "INSERT INTO products VALUES (NULL, :category_id, :name, :price)";

$stmt = $conn->prepare($query);
$stmt->bindParam("category_id",$post["productCategory"]);
$stmt->bindParam("name",$post["productName"]);
$stmt->bindParam("price",$post["productPrice"]);
$stmt->execute();

if($stmt->rowCount() == 1){
    $response = [
        "type" => "success",
        "message" => "Produto Cadastrado com Sucesso"
    ];
} else {
    $response = [
        "type" => "error",
        "message" => "Produto Não Cadastrado Tente novamente"
    ];
}

echo json_encode($response);
