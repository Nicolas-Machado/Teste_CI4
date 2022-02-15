<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informações do Pedido</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome-fornecedor">Nome do Fornecedor</label>
                                    <input type="text" name="nome_fornecedor" class="form-control" value="<?= $pedido['nome_fornecedor'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="chave-nfe">Chave da NFe</label>
                                    <input type="text" class="form-control" id="chaveNfe" name="chave_nfe" size="44" min="44" value="<?= $pedido['chave_nfe'] ?>" disabled>
                                </div>
                                <label for="nome-produto">Produto</label>
                                <input type="text" class="form-control" id="nomeProduto" name="nome_produto" value="<?= $pedido['nome_produto'] ?>" disabled>

                                </select>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="quantidade-estoque">Quantidade</label>
                                        <input type="number" class="form-control" id="quantidadePedido" name="quantidade" value="<?= $pedido['quantidade'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="valor-pedido">Valor</label>
                                        <input type="text" class="form-control" id="valorPedido" name="valor" value="<?= $pedido['valor'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="status">Status do Pedido</label>
                                    <input type="text" class="form-control" id="status" name="status" value="<?= $pedido['status'] ?>" disabled>
                                </div>
                                <label for="descricao-pedido">Descrição</label><br>
                                <textarea name="descricao" style="height: 150px; width: 500px" class="form-control" disabled><?= $pedido['descricao'] ?></textarea>
                                <div class="card-footer">
                                    <a href="/pedidos" class="btn btn-primary">Voltar</a>
                                </div>
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