<?php

    $users = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@gmail.com', 'password' => '123456'],
        ['id' => 2, 'name' => 'Mary Doe', 'email' => 'mary@gmail.com', 'password' => '123456'],
        ['id' => 3, 'name' => 'Peter Doe', 'email' => 'peter@gmail.com', 'password' => '123456'],
        ['id' => 4, 'name' => 'Jane Doe', 'email' => 'jane@gmail.com', 'password' => '123456']
    ];

    echo json_encode($users);
