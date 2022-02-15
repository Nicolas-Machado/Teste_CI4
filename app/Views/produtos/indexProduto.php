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
                            <label for="filtro">Filtrar Por:</label><br>
                            <form action="/produtos" method="POST">
                                <select class="col-auto" name="filtro">
                                    <option selected="true" disabled="disabled"></option>
                                    <option value="nome">Nome do Produto</option>
                                    <option value="tipo">Tipo</option>
                                    <option value="quantidade">Quantidade</option>
                                    <option value="descricao">Descrição</option>
                                </select>
                                <input name="campo" type="text" size="col-sm-3" placeholder="Digite Aqui Sua Pesquisa" />
                                <button type="submit" class="btn btn-secondary">Pesquisar</button>
                                <a href="/produtos/cadastroProduto" class="btn btn-success">Cadastrar Produto</a>

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