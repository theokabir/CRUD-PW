<?php include_once('include/header.php'); ?>

<?php
    
    require_once('database/connect.php');

    $res = $pdo->prepare("SELECT * FROM usuario");
    $res->execute();
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);

?>
    <div class="mt-4">
        <a href="cadastro.php" class="btn btn-outline-success my-2">criar</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">excluir</th>
                    <th scope="col">Modificar</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($dados as $user): ?>
                <tr>
                    <td><?php echo$user['nome']; ?> </td>
                    <td><?php echo $user['email']; ?> </td>
                    <td><?php echo $user['senha'] ; ?> </td>
                    <td><a href="database/delete.php?id=<?php echo $user['id']; ?>" class="btn btn-outline-danger">X</a></td>
                    <td><a href="modify.php?id=<?php echo $user['id']; ?>" class="btn btn-outline-info">edit</a></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

        <?php if(isset($_SESSION['msg'])): ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['msg']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php session_destroy() ?>
        <?php endif; ?>
    </div>
<?php include_once('include/footer.php'); ?>