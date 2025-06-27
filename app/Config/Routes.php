<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/categorias', 'Categoria::index');
$routes->get('/categorias/novo', 'Categoria::novo');
$routes->post('/categorias/salvar', 'Categoria::salvar');
$routes->get('/categorias/editar/(:num)', 'Categoria::editar/$1');
$routes->post('/categorias/atualizar/(:num)', 'Categoria::atualizar/$1');
$routes->get('/categorias/excluir/(:num)', 'Categoria::excluir/$1');
$routes->get('/usuario/cadastro', 'Usuario::cadastro');
$routes->post('/usuario/salvar', 'Usuario::salvar');
$routes->get('/login', 'Login::index');
$routes->post('/login/autenticar', 'Login::autenticar');
$routes->get('/logout', 'Login::logout');
$routes->get('/transacoes', 'Transacao::index');
$routes->get('/transacoes/novo', 'Transacao::novo');
$routes->post('/transacoes/salvar', 'Transacao::salvar');
$routes->get('/transacoes/excluir/(:num)', 'Transacao::excluir/$1');