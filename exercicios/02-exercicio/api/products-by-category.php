<?php

$arrayProducts = [
    ["id" => 1, "name" => "TV 55 Polegadas", "category_id" => 1, "price" => 3500.50],
    ["id" => 2, "name" => "Geladeira", "category_id" => 2, "price" => 2500.00],
    ["id" => 3, "name" => "Geladeira Brastemp", "category_id" => 2, "price" => 2500.00],
    ["id" => 4, "name" => "Geladeira Consul", "category_id" => 2, "price" => 3000.00],
    ["id" => 5, "name" => "Sofá", "category_id" => 3, "price" => 1500.00],
    ["id" => 6, "name" => "Sofá Cama", "category_id" => 3, "price" => 2000.00],
    ["id" => 7, "name" => "Cama", "category_id" => 3, "price" => 1000.00],
    ["id" => 8, "name" => "Cadeira", "category_id" => 3, "price" => 500.00],
    ["id" => 9, "name" => "Mesa", "category_id" => 3, "price" => 500.00],
    ["id" => 10, "name" => "Bicicleta", "category_id" => 18, "price" => 1000.00],
    ["id" => 11, "name" => "Bola", "category_id" => 18, "price" => 50.00],
    ["id" => 12, "name" => "Boneca", "category_id" => 4, "price" => 100.00],
    ["id" => 13, "name" => "Carrinho", "category_id" => 4, "price" => 100.00],
    ["id" => 14, "name" => "Camisa", "category_id" => 5, "price" => 50.00],
    ["id" => 15, "name" => "Calça", "category_id" => 5, "price" => 100.00],
    ["id" => 16, "name" => "Tênis NIKE", "category_id" => 6, "price" => 300.00],
    ["id" => 17, "name" => "Tênis Olympikus", "category_id" => 6, "price" => 200.00],
    ["id" => 18, "name" => "Sandália", "category_id" => 6, "price" => 100.00],
    ["id" => 19, "name" => "Arroz Branco", "category_id" => 7, "price" => 10.00],
    ["id" => 20, "name" => "Arroz Parbolizado", "category_id" => 7, "price" => 15.00],
    ["id" => 21, "name" => "Feijão", "category_id" => 7, "price" => 15]
];

// percorra o array dos produtos com foreach buscado os produtos da categoria solicitada

$idCategory = filter_input(INPUT_GET, "categoryId");

$response = [];

foreach ($arrayProducts as $product) {
    if ($product["category_id"] == $idCategory) {
        $response[] = $product;
    }
}

echo json_encode($response);
