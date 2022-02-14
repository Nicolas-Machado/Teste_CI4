<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cadastrar Produto</h3>
            </div>
            <form action="/produtos/store" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="nome-produto">Nome do Produto</label>
                  <input type="text" name="nome" class="form-control" id="nomeProduto" placeholder="ex: Teclado" required>
                </div>
                <div class="form-group">
                  <label for="tipo-produto">Tipo do produto</label>
                  <input type="text" name="tipo" class="form-control" id="tipoProduto" placeholder="ex: Periférico" required>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="quantidade-estoque">Quantidade em Estoque</label>
                    <input type="number" name="quantidade" class="form-control" id="quantidadeProduto" required>
                  </div>
                </div>
                <label for="descricao-produto">Descrição (Opcional)</label><br>
                <textarea name="descricao" style="height: 150px; width: 500px" placeholder=""></textarea>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Salvar</button>
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