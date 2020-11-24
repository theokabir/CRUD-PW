<?php
session_start();
require_once("connect.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$conf = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");

$conf->bindValue(":email", $email);

$conf->execute();

$usuarios = $conf->fetchAll(PDO::FETCH_ASSOC);
$contagem = count($usuarios);

if($contagem > 0){
    $_SESSION['msg'] = "erro";
    header("Location: ../lista.php");
}else{
    $res = $pdo->prepare("INSERT INTO usuario() VALUES(default, :nome, :email, :senha)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":senha", $senha);

    $res->execute();
    $_SESSION['msg'] = "criado";
    header("Location: ../lista.php");
}