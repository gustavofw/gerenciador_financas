<?php include(APPPATH . 'Views/layout/header.php'); ?>

<h2>Dashboard Financeiro</h2>

<div class="row">
  <div class="col-md-4">
    <div class="card text-bg-success mb-3">
      <div class="card-header">Receitas</div>
      <div class="card-body">
        <h5 class="card-title">R$ <?= number_format($receitas, 2, ',', '.') ?></h5>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-danger mb-3">
      <div class="card-header">Despesas</div>
      <div class="card-body">
        <h5 class="card-title">R$ <?= number_format($despesas, 2, ',', '.') ?></h5>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-primary mb-3">
      <div class="card-header">Saldo</div>
      <div class="card-body">
        <h5 class="card-title">R$ <?= number_format($saldo, 2, ',', '.') ?></h5>
      </div>
    </div>
  </div>
</div>

<?php include(APPPATH . 'Views/layout/footer.php'); ?>
