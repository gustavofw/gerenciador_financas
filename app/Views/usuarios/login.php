<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Login</h2>

<?php if (session()->getFlashdata('erro')): ?>
  <div class="alert alert-danger">
    <?= session()->getFlashdata('erro') ?>
  </div>
<?php endif; ?>

<form action="/login/autenticar" method="post">
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>
  <a href="/usuario/cadastro" class="btn btn-secondary">Cadastrar-se</a>
</form>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
