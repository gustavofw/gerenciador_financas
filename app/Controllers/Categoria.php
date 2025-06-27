<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    public function index()
    {
        $model = new CategoriaModel();
        $data['categorias'] = $model->findAll();
        $data['title'] = 'Categorias';
        return view('categorias/index', $data);
    }

    public function novo()
    {
        $data['title'] = 'Nova Categoria';
        return view('categorias/novo', $data);
    }

    public function salvar()
    {
        $model = new \App\Models\CategoriaModel();

        $data = [
            'nome_categoria' => $this->request->getPost('nome_categoria'),
            'tipo' => $this->request->getPost('tipo'),
            'usuario_id' => session()->get('usuario_id')
        ];

        $model->insert($data);

        return redirect()->to('/categorias')->with('msg', 'Categoria adicionada com sucesso!');
    }

    public function editar($id)
    {
        $model = new \App\Models\CategoriaModel();
        $data['categoria'] = $model->find($id);
        $data['title'] = 'Editar Categoria';

        return view('categorias/editar', $data);
    }

    public function atualizar($id)
    {
        $model = new \App\Models\CategoriaModel();

        $data = [
            'nome_categoria' => $this->request->getPost('nome_categoria'),
            'tipo' => $this->request->getPost('tipo')
        ];

        $model->update($id, $data);

        return redirect()->to('/categorias')->with('msg', 'Categoria atualizada com sucesso!');
    }

    public function excluir($id)
    {
        $model = new \App\Models\CategoriaModel();
        $model->delete($id);

        return redirect()->to('/categorias')->with('msg', 'Categoria excluída com sucesso!');
    }

}
