<?php

require "connection.php";

$user = filter_input_array(INPUT_POST);
// Para testar a resquisição, devolve os mesmos dados que recebeu
// echo json_encode($user);;
// exit;

if(in_array("",$user)){
    $response = [
        "type" => "error",
        "message" => "Preencha todos os campos"
    ];
    echo json_encode($response);
    exit;
}

// valida o email

if(!filter_var($user["email"],FILTER_VALIDATE_EMAIL)){
    $response = [
        "type" => "error",
        "message" => "E-mail inválido!"
    ];
    echo json_encode($response);
    exit;
}

// verifica se o email já existe

$query = "SELECT * FROM users WHERE email = :email";
$stmt = $conn->prepare($query);
$stmt->bindParam("email",$user["email"]);
$stmt->execute();
if($stmt->rowCount() == 1){
    $response = [
        "type" => "error",
        "message" => "E-mail já cadastrado!"
    ];
    echo json_encode($response);
    exit;
}

$query = "INSERT INTO users 
          VALUES (NULL, :name, :email, :password)";
$stmt = $conn->prepare($query);
$stmt->bindParam("name", $user["name"]);
$stmt->bindParam("email",$user["email"]);
$password = password_hash($user["password"],PASSWORD_DEFAULT);
$stmt->bindParam("password",$password);
$stmt->execute();

if($stmt->rowCount() != 1){
    $response = [
        "type" => "error",
        "message" => "Usuário não cadastrado!"
    ];
    echo json_encode($response);
    exit;
}

$response = [
    "type" => "success",
    "message" => "Usuário cadastrado com sucesso!"
];

echo json_encode($response);
