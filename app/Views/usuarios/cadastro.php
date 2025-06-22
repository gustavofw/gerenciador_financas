<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Cadastro de Usuário</h2>

<form action="/usuario/salvar" method="post">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome_usuario" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-success">Cadastrar</button>
  <a href="/" class="btn btn-secondary">Cancelar</a>
</form>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
