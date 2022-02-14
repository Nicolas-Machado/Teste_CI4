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
        $produtos = $this->ProdutoModel->findAll();
        $data['produtos'] = $produtos;
        echo view('templates/header');
        echo view('produtos/indexProduto', $data);
        echo view('templates/footer');
    }

    public function cadastroProduto()
    {
        echo view('templates/header');
        echo view('produtos/cadastroProduto');
        echo view('templates/footer');
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
        echo view('templates/footer');
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
        echo view('templates/footer');
    }
}
