<?php

try{
    $pdo = new PDO("mysql:dbname=crud;host=localhost", "root", "");
    $pdo->exec("CREATE TABLE IF NOT EXISTS usuario(id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, senha VARCHAR(60) NOT NULL, PRIMARY KEY(id) );");
}catch(Exception $e){
    echo "erro: ".$e;
}