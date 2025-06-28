<?php include(APPPATH . 'Views/layout/header.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Minhas Transações</h2>
  <a href="/transacoes/novo" class="btn btn-success">+ Nova Transação</a>
</div>

<?php if(session()->getFlashdata('msg')): ?>
  <div class="alert alert-success">
    <?= session()->getFlashdata('msg') ?>
  </div>
<?php endif; ?>

<table class="table table-striped table-bordered align-middle">
  <thead class="table-dark">
    <tr>
      <th>Descrição</th>
      <th>Valor</th>
      <th>Data</th>
      <th>Categoria</th>
      <th>Tipo</th>
      <th class="text-center">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($transacoes as $t): ?>
      <tr>
        <td><?= esc($t['descricao']) ?></td>
        <td class="<?= $t['tipo'] === 'receita' ? 'text-success' : 'text-danger' ?>">
          <strong>R$ <?= number_format($t['valor'], 2, ',', '.') ?></strong>
        </td>
        <td><?= date('d/m/Y', strtotime($t['data'])) ?></td>
        <td><?= esc($t['nome_categoria']) ?></td>
        <td>
          <span class="badge <?= $t['tipo'] === 'receita' ? 'bg-success' : 'bg-danger' ?>">
            <?= ucfirst($t['tipo']) ?>
          </span>
        </td>
        <td class="text-center">
          <a href="/transacoes/excluir/<?= $t['id_transacao'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir esta transação?')">
            Excluir
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>