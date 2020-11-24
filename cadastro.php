<?php include_once('include/header.php'); ?>

<form action="database/create.php" method="post" class="mt-4">
    
    <div class="form-group">
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome" class="form form-control">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email" class="form form-control">
    </div>

    <div class="form-group">
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha" class="form form-control">
    </div>

    <input type="submit" value="entrar" class="btn btn-success btn-block">
</form>

<?php include_once('include/footer.php'); ?>