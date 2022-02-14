<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editar Pedido</h3>
                        </div>
                        <form action="/pedidos/store" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome-fornecedor">Nome do Fornecedor</label>
                                    <input type="text" name="nome_fornecedor" class="form-control" value="<?= $pedido['nome_fornecedor'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="chave-nfe">Chave da NFe</label>
                                    <input type="text" class="form-control" id="chaveNfe" name="chave_nfe" size="44" min="44" value="<?= $pedido['chave_nfe'] ?>" required>
                                </div>
                                <label for="produtos">Escolha um Produto:</label>
                                <select id="produtoSelect" name="nome_produto" required>
                                    <?php foreach ($produtos as $produto) { ?>
                                        <option value="<?= $produto['nome'] ?>"><?= $produto['nome'] ?></option>
                                    <?php } ?>

                                </select>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="quantidade-estoque">Quantidade</label>
                                        <input type="number" class="form-control" id="quantidadePedido" name="quantidade" value="<?= $pedido['quantidade'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="valor-pedido">Valor</label>
                                        <input type="text" class="form-control" id="valorPedido" name="valor" value="<?= $pedido['valor'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status do Pedido</label>
                                    <select id="statusPedido" name="status" required>
                                        <option value="Aberto">Em Aberto</option>
                                        <option value="Pago">Pago</option>
                                        <option value="Cancelado">Cancelado</option>
                                    </select>
                                </div>
                                <label for="descricao-pedido">Descrição (Opcional)</label><br>
                                <textarea name="descricao" style="height: 150px; width: 500px" class="form-control"><?= $pedido['descricao'] ?></textarea>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <a href="/pedidos" class="btn btn-primary">Voltar</a>
                                </div>
                                <input type="hidden" name="id" value="<?= $pedido['id'] ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
        </div>
    </div>
</div>