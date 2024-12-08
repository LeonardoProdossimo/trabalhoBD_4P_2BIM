<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, produto-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col mt-4 mb-4">
        <h2>Produto</h2>
      </div>
    </div>
     <?php echo form_open('produto/store'); ?>

      <div class="row g-3">
          <div class="col-md-6">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text" class="form-control" id="descricao" name="descricao" value="<?=isset($produto['descricao'])?$produto['descricao']:'';?>">
          </div>
          <div class="col-md-6">
              <label for="categoria" class="form-label">Categoria</label>
              <input type="text" class="form-control" id="categoria" name="categoria" value="<?=isset($produto['categoria'])?$produto['categoria']:'';?>">
          </div>
          <div class="col-md-6">
              <label for="preco" class="form-label">Preço</label>
              <input type="number" step="0.01" class="form-control" id="preco" name="preco" value="<?=isset($produto['preco'])?$produto['preco']:'';?>">
          </div>
          <div class="col-md-6">
              <label for="quantidade_estoque" class="form-label">Estoque</label>
              <input type="number" class="form-control" id="quantidade_estoque" name="quantidade_estoque" value="<?=isset($produto['quantidade_estoque'])?$produto['quantidade_estoque']:'';?>">
          </div>
        <input type="hidden" name="idproduto"  value="<?=isset($produto['idproduto'])?$produto['idproduto']:'';?>">
          <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
      </div>
      <?php echo form_close(); ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
  </body>
</html>