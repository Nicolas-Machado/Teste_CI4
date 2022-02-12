<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Produtos extends Controller
{

    public function index()
    {
        return "index.Produtos";
    }

    public function novoProduto()
    {
        return "Novo Produto";
    }
}

?>