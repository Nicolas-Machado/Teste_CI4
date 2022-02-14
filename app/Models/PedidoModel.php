<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidoModel extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nome_fornecedor',
        'chave_nfe',
        'nome_produto',
        'quantidade',
        'valor',
        'status',
        'descricao'
    ];
}
