<?php include(APPPATH . 'Views/layout/header.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Categorias</h2>
  <a href="/categorias/novo" class="btn btn-success">+ Nova Categoria</a>
</div>

<?php if(session()->getFlashdata('msg')): ?>
  <div class="alert alert-success">
    <?= session()->getFlashdata('msg') ?>
  </div>
<?php endif; ?>

<table class="table table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>Tipo</th>
      <th class="text-center">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorias as $cat): ?>
      <tr>
        <td><?= esc($cat['nome_categoria']) ?></td>
        <td>
          <span class="badge <?= $cat['tipo'] === 'receita' ? 'bg-success' : 'bg-danger' ?>">
            <?= ucfirst($cat['tipo']) ?>
          </span>
        </td>
        <td class="text-center">
          <a href="/categorias/editar/<?= $cat['id_categoria'] ?>" class="btn btn-warning btn-sm">Editar</a>
          <a href="/categorias/excluir/<?= $cat['id_categoria'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Excluir essa categoria?')">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>