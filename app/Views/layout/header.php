<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Finanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <?php if (session()->get('logado')): ?>
        <nav class="mb-3">
            <a href="/" class="btn btn-outline-primary">Dashboard</a>
            <a href="/categorias" class="btn btn-outline-secondary">Categorias</a>
            <a href="/transacoes" class="btn btn-outline-success">Transações</a>
            <a href="/logout" class="btn btn-outline-danger">Sair</a>
        </nav>
        <p>Bem-vindo, <strong><?= session()->get('nome_usuario') ?></strong></p>
    <?php endif; ?>
