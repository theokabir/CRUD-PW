<?php include_once('include/header.php'); ?>

<?php
require_once("database/connect.php");
$res = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");

$res->bindValue(":id", $_GET['id']);

$res->execute();

$usuario = $res->fetchAll(PDO::FETCH_ASSOC);
$contagem = count($usuario);

if($contagem !== 1){
    $_SESSION['msg'] = "usuario não existe";
    header("Location: lista.php");
}

?>

<div class="my-4">

    <form action="database/modify.php" method="post">

        <div class="form-group">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="nome"  value = "<?php echo $usuario[0]['nome']; ?>" required class="form form-control">
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" id="email" value = "<?php echo $usuario[0]['email']; ?>" required class="form form-control">
        </div>

        <div class="form-group">
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha" value = "<?php echo $usuario[0]['senha']; ?>" required class="form form-control">
        </div>

        <input type="hidden" name="id" value = "<?php echo $usuario[0]['id']; ?>" required>

        <input type="submit" value="entrar" class="btn btn-primary btn-block">
    </form>

</div>

<?php include_once('include/footer.php'); ?>