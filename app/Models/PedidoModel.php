<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nome',
        'chave_`nfe',
        'nome_produto',
        'quantidade',
        'valor',
        'status',
        'descricao'
    ];
}

?>