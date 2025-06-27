<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransacoes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transacao' => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
            ],
            'descricao' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'valor' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => false,
            ],
            'data' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'categoria_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
            'usuario_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id_transacao', true);
        $this->forge->addForeignKey('categoria_id', 'categorias', 'id_categoria', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->createTable('transacoes');
    }

    public function down()
    {
        $this->forge->dropTable('transacoes');
    }
}
