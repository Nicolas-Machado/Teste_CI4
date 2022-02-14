<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
            ],

            'tipo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],

            'quantidade' => [
                'type' => 'INT',
            ],

            'descricao' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('produtos', true);
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
