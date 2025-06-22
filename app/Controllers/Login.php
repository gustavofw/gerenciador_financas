<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('usuarios/login');
    }

    public function autenticar()
    {
        $usuarioModel = new UsuarioModel();
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $usuario = $usuarioModel->where('email', $email)->first();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            session()->set([
                'usuario_id' => $usuario['id_usuario'],
                'nome_usuario' => $usuario['nome_usuario'],
                'logado' => true
            ]);
            return redirect()->to('/categorias');
        } else {
            return redirect()->to('/login')->with('erro', 'Email ou senha inválidos!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
