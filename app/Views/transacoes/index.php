<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Minhas Transações</h2>
<a href="/transacoes/novo" class="btn btn-success mb-2">Nova Transação</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Descrição</th>
      <th>Valor</th>
      <th>Data</th>
      <th>Categoria</th>
      <th>Tipo</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($transacoes as $t): ?>
      <tr>
        <td><?= esc($t['descricao']) ?></td>
        <td>R$ <?= number_format($t['valor'], 2, ',', '.') ?></td>
        <td><?= date('d/m/Y', strtotime($t['data'])) ?></td>
        <td><?= esc($t['nome_categoria']) ?></td>
        <td><?= esc($t['tipo']) ?></td>
        <td>
          <!-- Excluir -->
          <a href="/transacoes/excluir/<?= $t['id_transacao'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Excluir esta transação?')">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
