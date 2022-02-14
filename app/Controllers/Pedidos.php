<?php

namespace App\Controllers;

use App\Models\PedidoModel;
use CodeIgniter\Controller;

class Pedidos extends Controller
{
    public function cadastroPedido()
    {
        echo view('templates/header');
        echo view('pedidos/cadastroPedido');
        echo view('templates/footer');
    }
}
