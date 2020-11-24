<?php
@session_start();

include_once('connect.php');


if( (empty($_POST['email'])) || (empty($_POST['senha'])) ){
    header("Location: ../");
}

$res = $pdo->prepare("SELECT * FROM usuario WHERE email = :email and senha = :senha");

$res->bindValue(":email", $_POST['email']);
$res->bindValue(":senha", $_POST['senha']);

$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if($linhas == 1){
    header("Location: ../lista.php");
}else{
    header("Location: ../");
}

