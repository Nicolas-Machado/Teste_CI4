<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\Controller;


class Produtos extends BaseController
{
    private $ProdutoModel;

    function __construct()
    {
        $this->ProdutoModel = new ProdutoModel();
    }

    public function index()
    {
        $filtro = $this->request->getVar('filtro');
        $campo  = $this->request->getVar('campo');
        $produtos = $this->ProdutoModel->paginate(20);

        if (isset($filtro)) {
            $produtos = $this->ProdutoModel->buscarProduto($filtro, $campo);
            $data['produtos'] = $produtos;
        } else {
            $data['produtos'] = $produtos;
        }

        $pager = $this->ProdutoModel->pager;
        $data['pager'] = $pager;
        echo view('templates/header');
        echo view('produtos/indexProduto', $data);
    }

    public function cadastroProduto()
    {
        echo view('templates/header');
        echo view('produtos/cadastroProduto');
    }

    public function store()
    {
        $dados = $this->request->getVar();
        if (isset($dados['id'])) :
            $this->ProdutoModel->where('id', $dados['id'])
                ->set($dados)->update();
            return redirect()->to('/produtos');
        endif;

        $this->ProdutoModel->insert($dados);

        return redirect()->to('/produtos');
    }

    public function editarProduto($id)
    {
        $produto = $this->ProdutoModel->where('id', $id)->first();
        $data['produto'] = $produto;
        echo view('templates/header');
        echo view('produtos/editarProduto', $data);
    }

    public function excluirProduto($id)
    {
        $produto = $this->ProdutoModel->where('id', $id)->delete();

        return redirect()->to('/produtos');
    }

    public function verProduto($id)
    {
        $produto = $this->ProdutoModel->where('id', $id)->first();
        $data['produto'] = $produto;
        echo view('templates/header');
        echo view('produtos/verProduto', $data);
    }
}
