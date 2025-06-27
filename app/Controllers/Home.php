<?php

namespace App\Controllers;

use App\Models\TransacaoModel;
use App\Models\CategoriaModel;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->get('logado')) {
            return redirect()->to('/login');
        }

        $usuarioId = session()->get('usuario_id');

        $transacaoModel = new TransacaoModel();

        $receitas = $transacaoModel
            ->join('categorias', 'categorias.id_categoria = transacoes.categoria_id')
            ->where('transacoes.usuario_id', $usuarioId)
            ->where('categorias.tipo', 'receita')
            ->selectSum('valor')
            ->first()['valor'];

        $despesas = $transacaoModel
            ->join('categorias', 'categorias.id_categoria = transacoes.categoria_id')
            ->where('transacoes.usuario_id', $usuarioId)
            ->where('categorias.tipo', 'despesa')
            ->selectSum('valor')
            ->first()['valor'];

        $saldo = ($receitas ?? 0) - ($despesas ?? 0);

        $data = [
            'receitas' => $receitas ?? 0,
            'despesas' => $despesas ?? 0,
            'saldo' => $saldo
        ];

        return view('home/index', $data);
    }
}
