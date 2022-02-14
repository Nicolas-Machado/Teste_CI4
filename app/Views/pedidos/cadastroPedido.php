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
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome-fornecedora">Nome da Fornecedora</label>
                                    <input type="text" class="form-control" id="nomeFornecedora" placeholder="ex: Kabum" required>
                                </div>
                                <div class="form-group">
                                    <label for="chave-nfe">Chave da NFe</label>
                                    <input type="text" class="form-control" id="chaveNfe" size="44" min="44" required>
                                </div>
                                <label for="produtos">Escolha um Produto:</label>
                                <select id="produtoSelect" name="produto">
                                    <option value="Placeholder" disabled selected>Selecione uma opção</option>
                                    <option value="Teste">Teste</option>
                                </select>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="quantidade-estoque">Quantidade</label>
                                        <input type="number" class="form-control" id="quantidadeProduto" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status do Pedido</label>
                                    <select id="statusPedido" name="statusPedido">
                                        <option value="Placeholder" disabled selected>Selecione uma opção</option>
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
                                    <button type="submit" class="btn btn-primary">Salvar</button>
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