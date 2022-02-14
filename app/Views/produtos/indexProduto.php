<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title">Produtos Cadastrados</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/produtos/cadastroProduto" class="btn btn-success">Cadastrar Produto</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nome do Produto</th>
                                        <th>Tipo</th>
                                        <th>Quantidade</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produtos as $produto) : ?>
                                        <tr>
                                            <td>
                                                <a href="/produtos/verProduto/<?= $produto['id'] ?>"><?= $produto['nome'] ?>
                                                </a>
                                            </td>
                                            <td><?= $produto['tipo'] ?></td>
                                            <td><?= $produto['quantidade'] ?></td>
                                            <td><?= $produto['descricao'] ?></td>
                                            <td>
                                                <a href="/produtos/editarProduto/<?= $produto['id'] ?>" class="btn btn-warning">Editar</a>
                                                <a href="/produtos/excluirProduto/<?= $produto['id'] ?>" class="btn btn-danger">Excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>