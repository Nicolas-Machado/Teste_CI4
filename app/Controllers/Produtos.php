<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Produtos extends Controller
{
    public function index(){
        return "Menu";
    }

    public function novoProduto()
    {
        return "Novo Produto";
    }

    public function listaProdutos(){
        $produtos = [

            [  
                'nome' => "Mouse",
                'tipo' => "Periférico",
                'quantidade' => 20,
                'descricao' => "teste de descrição",
            ]
        ];

        $data['produtos'] = $produtos;

        echo view('produtos/indexProdutos', $data);
    }
}

?>