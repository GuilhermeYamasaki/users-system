<?php require 'header.php'; ?>
<div class="row">
    <div class="col-12">
        <h1>Editar usuário <?= $id ?></h1>
        <form action="/app/controllers/UserControllerStore.php" method="post">
            <input class="form-control my-2" type="text" name="name" placeholder="Nome" value="<?= $user['name'] ?>">
            <input class="form-control my-2" type="email" required name="email" placeholder="E-mail" value="<?= $user['email'] ?>">
            <input class="form-control my-2" type="password" required name="password" placeholder="Senha">
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mx-2">Criar</button>
                <a href="/users" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>