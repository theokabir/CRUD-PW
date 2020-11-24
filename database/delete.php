<?php
require_once('connect.php');

$res = $pdo->prepare("DELETE FROM usuario WHERE id = :id");

$id = $_GET['id'];

$res->bindValue(":id", $id);

$res->execute();

header("Location: ../lista.php");