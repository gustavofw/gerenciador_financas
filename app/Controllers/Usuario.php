<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function cadastro()
    {
        return view('usuarios/cadastro');
    }

    public function salvar()
    {
        $usuarioModel = new UsuarioModel();

        $data = [
            'nome_usuario' => $this->request->getPost('nome_usuario'),
            'email' => $this->request->getPost('email'),
            'senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT)
        ];

        $usuarioModel->insert($data);

        return redirect()->to('/login')->with('msg', 'Usuário cadastrado com sucesso!');
    }
}
