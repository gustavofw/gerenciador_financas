<?php

namespace App\Models;

use CodeIgniter\Model;

class TransacaoModel extends Model
{
    protected $table = 'transacoes';
    protected $primaryKey = 'id_transacao';
    protected $allowedFields = ['descricao', 'valor', 'data', 'categoria_id', 'usuario_id'];
}
