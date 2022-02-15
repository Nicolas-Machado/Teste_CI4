<?php

namespace App\Controllers;

use App\Models\PedidoModel;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Pedidos extends BaseController
{
    private $PedidoModel;
    private $ProdutoModel;

    public function __construct()
    {
        $this->PedidoModel = new PedidoModel();
        $this->ProdutoModel = new ProdutoModel();
    }

    public function index()
    {
        $filtro = $this->request->getVar('filtro');
        $campo  = $this->request->getVar('campo');
        $pedidos = $this->PedidoModel->paginate(20);

        if (isset($campo)) {
            $pedidos = $this->PedidoModel->buscarPedido($filtro, $campo);
            $data['pedidos'] = $pedidos;
        } else {
            $data['pedidos'] = $pedidos;
        }

        $pager = $this->PedidoModel->pager;
        $data['pager'] = $pager;
        echo view('templates/header');
        echo view('pedidos/indexPedido', $data);
    }

    public function cadastroPedido()
    {
        $produtos = $this->ProdutoModel->findAll();
        $data['produtos'] = $produtos;
        echo view('templates/header');
        echo view('pedidos/cadastroPedido', $data);
    }

    public function store()
    {
        $dados = $this->request->getVar();
        if (isset($dados['id'])) :
            $this->PedidoModel->where('id', $dados['id'])
                ->set($dados)->update();
            return redirect()->to('/pedidos');
        endif;

        $this->PedidoModel->insert($dados);

        return redirect()->to('/pedidos');
    }


    public function editarPedido($id)
    {
        $produtos = $this->ProdutoModel->findAll();
        $pedido = $this->PedidoModel->where('id', $id)->first();
        $data['produtos'] = $produtos;
        $data['pedido'] = $pedido;
        echo view('templates/header');
        echo view('pedidos/editarPedido', $data);
    }

    public function excluirPedido($id)
    {
        $this->PedidoModel->where('id', $id)->delete();

        return redirect()->to('/pedidos');
    }

    public function verPedido($id)
    {
        $pedido = $this->PedidoModel->where('id', $id)->first();
        $data['pedido'] = $pedido;
        echo view('templates/header');
        echo view('pedidos/verPedido', $data);
    }
}
