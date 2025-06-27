<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categoria' => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
            ],
            'nome_categoria' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => false,
            ],
            'usuario_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id_categoria', true);
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->createTable('categorias');
    }

    public function down()
    {
        $this->forge->dropTable('categorias');
    }
}
