<?php include_once('include/header.php'); ?>

<form action="database/auth.php" method="post">
    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email" class="form form-control" placeholder="mail@teste.com">
    </div>

    <div class="form-group">
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha" class="form form-control" placeholder="senha">
    </div>

    <input type="submit" value="entrar" class="form form-control btn btn-success btn-block">
</form>
<a href="cadastro.php" class="btn btn-primary btn-block mt-4">Cadastrar</a>

<?php include_once('include/footer.php'); ?>