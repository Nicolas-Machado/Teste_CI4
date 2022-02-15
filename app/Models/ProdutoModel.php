<?php

namespace App\Models;


use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nome',
        'tipo',
        'descricao',
        'quantidade'
    ];

    public function buscarProduto($filtro, $campo)
    {
        $sql = "
            SELECT * FROM produtos
            WHERE $filtro LIKE '%$campo%'
        ";

        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
}
