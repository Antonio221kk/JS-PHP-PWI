<?php

require "connection.php";

$post = filter_input_array(INPUT_POST);

if(in_array("",$post)){
    $response = [
        "type" => "error",
        "message" => "Preencha todos os campos"
    ];
    echo json_encode($response);
    exit;
}

$query = "INSERT INTO products VALUES (NULL, :category_id, :name, :price)";
$stmt = $conn->prepare($query);
$stmt->bindParam("name", $post["productName"]);
$stmt->bindParam("price",$post["productPrice"]);
$stmt->bindParam("category_id",$post["productCategory"]);
$stmt->execute();

if($stmt->rowCount() != 1){
    $response = [
        "type" => "error",
        "message" => "Produto não cadastrado!"
    ];
    echo json_encode($response);
    exit;
}

$response = [
   "type" => "success",
   "message" => "Produto cadastrado com sucesso!"
];

echo json_encode($response);
