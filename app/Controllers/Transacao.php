<?php

namespace App\Controllers;

use App\Models\TransacaoModel;
use App\Models\CategoriaModel;

class Transacao extends BaseController
{
    public function index()
    {
        if (!session()->get('logado')) {
            return redirect()->to('/login');
        }

        $transacaoModel = new TransacaoModel();
        $usuarioId = session()->get('usuario_id');

        $data['transacoes'] = $transacaoModel
            ->where('transacoes.usuario_id', $usuarioId)
            ->join('categorias', 'categorias.id_categoria = transacoes.categoria_id')
            ->select('transacoes.*, categorias.nome_categoria, categorias.tipo')
            ->findAll();

        return view('transacoes/index', $data);
    }

    public function novo()
    {
        $categoriaModel = new CategoriaModel();
        $data['categorias'] = $categoriaModel->where('usuario_id', session()->get('usuario_id'))->findAll();

        return view('transacoes/novo', $data);
    }

    public function salvar()
    {
        $model = new TransacaoModel();

        $data = [
            'descricao' => $this->request->getPost('descricao'),
            'valor' => $this->request->getPost('valor'),
            'data' => $this->request->getPost('data'),
            'categoria_id' => $this->request->getPost('categoria_id'),
            'usuario_id' => session()->get('usuario_id')
        ];

        $model->insert($data);

        return redirect()->to('/transacoes');
    }

    public function excluir($id)
    {
        $model = new TransacaoModel();
        $model->delete($id);

        return redirect()->to('/transacoes');
    }
}
