<?php

$users = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'john@gmail.com', 'password' => '123456'],
    ['id' => 2, 'name' => 'Mary Doe', 'email' => 'mary@gmail.com', 'password' => '123456'],
    ['id' => 3, 'name' => 'Peter Doe', 'email' => 'peter@gmail.com', 'password' => '123456'],
    ['id' => 4, 'name' => 'Jane Doe', 'email' => 'jane@gmail.com', 'password' => '123456']
];
// criar variavel para pegar valores do form, fazer o processo de filtro para não ocorrer erros e vulnerabilidades, selecionar o metodo sendo post ou get e após isso escrever o nome do input que está sendo selecionado, no caso: email e password.

$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

// flag com o objetivo de auxiliar na verificação se o email e senha condizem com o que está no vetor, se a $find for true, ela continua, se for false, ela dá erro
$find = false;

foreach($users as $user){
    if($user["email"] === $email && $user["password"] === $password){
        $find = true;
        break;
    }
    
}
if($find){
    echo "Login Success";
}
else{
    echo "Invalid Email or Password";
}

