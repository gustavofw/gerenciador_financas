<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Nova Transação</h2>

<form action="/transacoes/salvar" method="post">
  <div class="mb-3">
    <label>Descrição</label>
    <input type="text" name="descricao" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Valor</label>
    <input type="number" name="valor" step="0.01" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Data</label>
    <input type="date" name="data" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Categoria</label>
    <select name="categoria_id" class="form-control" required>
      <option value="">Selecione</option>
      <?php foreach ($categorias as $c): ?>
        <option value="<?= $c['id_categoria'] ?>"><?= esc($c['nome_categoria']) ?> (<?= esc($c['tipo']) ?>)</option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="/transacoes" class="btn btn-secondary">Cancelar</a>
</form>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
