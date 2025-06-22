<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Nova Categoria</h2>

<form action="/categorias/salvar" method="post">
  <div class="mb-3">
    <label for="nome_categoria" class="form-label">Nome</label>
    <input type="text" name="nome_categoria" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <select name="tipo" class="form-control" required>
      <option value="receita">Receita</option>
      <option value="despesa">Despesa</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Salvar</button>
  <a href="/categorias" class="btn btn-secondary">Voltar</a>
</form>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
