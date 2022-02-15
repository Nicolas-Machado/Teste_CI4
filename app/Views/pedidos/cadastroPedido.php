<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar Pedido</h3>
                        </div>
                        <form action="/pedidos/store" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome-fornecedor">Nome do Fornecedor</label>
                                    <input type="text" class="form-control" id="nomeFornecedora" name="nome_fornecedor" placeholder="ex: Kabum" required>
                                </div>
                                <div class="form-group">
                                    <label for="chave-nfe">Chave da NFe</label>
                                    <input type="text" class="form-control" id="chaveNfe" name="chave_nfe" maxlength="44" minlength="44" required>
                                </div>
                                <label for="produtos">Escolha um Produto:</label>
                                <select id="produtoSelect" name="nome_produto" required>
                                    <option selected="true" disabled="disabled"></option>
                                    <?php foreach ($produtos as $produto) { ?>
                                        <option value="<?= $produto['nome'] ?>"><?= $produto['nome'] ?></option>
                                    <?php } ?>

                                </select>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="quantidade-estoque">Quantidade</label>
                                        <input type="number" class="form-control" id="quantidadeProduto" name="quantidade" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="valor-produto">Valor</label>
                                        <input type="number" class="form-control" id="valorProduto" name="valor" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status do Pedido</label>
                                    <select id="statusPedido" name="status" required>
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Aberto">Em Aberto</option>
                                        <option value="Pago">Pago</option>
                                        <option value="Cancelado">Cancelado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="descricao-produto">Descrição (Opcional)</label><br>
                                    <textarea name="descricao" style="height: 150px; width: 500px" placeholder=""></textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Salvar</button>
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