<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Lista de Categorias</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Tipo</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorias as $cat): ?>
    <tr>
      <td><?= esc($cat['nome_categoria']) ?></td>
      <td><?= esc($cat['tipo']) ?></td>
      <td>
        <a href="/categorias/editar/<?= $cat['id_categoria'] ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="/categorias/excluir/<?= $cat['id_categoria'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if(session()->getFlashdata('msg')): ?>
  <div class="alert alert-success">
    <?= session()->getFlashdata('msg') ?>
  </div>
<?php endif; ?>

<a href="/categorias/novo" class="btn btn-primary mb-3">Nova Categoria</a>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
