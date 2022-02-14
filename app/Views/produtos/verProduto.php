<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informações do Produto</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome-produto">Nome do Produto</label>
                                    <input type="text" name="nome" class="form-control" value="<?= $produto['nome'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tipo-produto">Tipo do produto</label>
                                    <input type="text" name="tipo" class="form-control" value="<?= $produto['tipo'] ?>" disabled>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="quantidade-estoque">Quantidade em Estoque</label>
                                        <input type="number" name="quantidade" class="form-control" value="<?= $produto['quantidade'] ?>" disabled>
                                    </div>
                                </div>
                                <label for="descricao-produto">Descrição (Opcional)</label><br>
                                <textarea name="descricao" style="height: 150px; width: 500px" disabled><?= $produto['descricao'] ?></textarea>
                                <div class="card-footer">
                                    <a href="/produtos" class="btn btn-primary">Voltar</a>
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