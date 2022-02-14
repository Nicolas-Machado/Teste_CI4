<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title">Pedidos Cadastrados</h3>
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
                            <a href="/pedidos/cadastroPedido" class="btn btn-success">Cadastrar Pedido</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Chave NFe</th>
                                        <th>Fornecedor (Nome)</th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Valor</th>
                                        <th>Status</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pedidos as $pedido) : ?>
                                        <tr>
                                            <td>
                                                <a href="/pedidos/verPedido/<?= $pedido['id'] ?>"><?= $pedido['chave_nfe'] ?>
                                                </a>
                                            </td>
                                            <td><?= $pedido['nome_fornecedor'] ?></td>
                                            <td><?= $pedido['nome_produto'] ?></td>
                                            <td><?= $pedido['quantidade'] ?></td>
                                            <td><?= $pedido['valor'] ?></td>
                                            <td><?= $pedido['status'] ?></td>
                                            <td><?= $pedido['descricao'] ?></td>
                                            <td>
                                                <a href="/pedidos/editarPedido/<?= $pedido['id'] ?>" class="btn btn-warning">Editar</a>
                                                <a href="/pedidos/excluirPedido/<?= $pedido['id'] ?>" class="btn btn-danger">Excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="row">
                                <?php echo $pager->links('default', 'pagination') ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>