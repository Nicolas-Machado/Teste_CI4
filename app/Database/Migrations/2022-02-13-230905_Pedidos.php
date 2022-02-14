<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pedidos extends Migration
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

            'nome_fornecedor' => [
                 'type' => 'VARCHAR',
                 'constraint' => 120,
            ],

             'chave_nfe' => [
                'type' => 'VARCHAR',
                'constraint' => 44,
             ],

             'nome_produto' => [
                 'type' => 'VARCHAR',
                 'constraint' => 120,
             ],

             'quantidade' => [
                'type' => 'INT',
             ],

             'valor' => [
                 'type' => 'DOUBLE',
             ],

             'status' => [
                 'type' => 'VARCHAR',
                 'constraint' => 10,
             ],

             'descricao' => [
                'type' => 'TEXT',
             ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pedidos');

    }

    public function down()
    {
        $this->forge->dropTable('pedidos', true);
    }
}
