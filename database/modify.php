<?php
session_start();
require_once('connect.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(empty($id) || empty($email) || empty($nome) || empty($senha)){
    $_SESSION['msg'] = 'campo vazio';
    header("Location: ../lista.php");
}

$res = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id");

$res->bindValue(":nome", $nome);
$res->bindValue(":id", $id);
$res->bindValue("email", $email);
$res->bindValue(":senha", $senha);

$res->execute();

$_SESSION['msg'] = "modificado";
header("Location: ../lista.php");

