<?php

session_start();

if(!empty($_SESSION["user"])){
    echo json_encode($_SESSION["user"]);
    exit;
}