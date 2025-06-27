<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Editar Categoria</h2>

<form action="/categorias/atualizar/<?= $categoria['id_categoria'] ?>" method="post">
  <div class="mb-3">
    <label for="nome_categoria" class="form-label">Nome</label>
    <input type="text" name="nome_categoria" value="<?= esc($categoria['nome_categoria']) ?>" class="form-control" required>
  </div>

  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <select name="tipo" class="form-control" required>
      <option value="receita" <?= $categoria['tipo'] == 'receita' ? 'selected' : '' ?>>Receita</option>
      <option value="despesa" <?= $categoria['tipo'] == 'despesa' ? 'selected' : '' ?>>Despesa</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Atualizar</button>
  <a href="/categorias" class="btn btn-secondary">Cancelar</a>
</form>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
