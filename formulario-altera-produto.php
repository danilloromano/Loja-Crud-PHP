<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategoria($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>  

<h1>Altera Produtos</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="produtoFormulario">
<form class="form-horizontal"id="formularioCadastro" action="altera-produto.php" method="post">
<input type="hidden" id="imputEscondido" name="id" value="<?=$produto['id']?>">
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome:</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$produto['nome']?>" class="form-control"  name="nome" placeholder="Insira o nome do produto">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="preco">Valor:</label>
    <div class="col-sm-10"> 
      <input type="number" value="<?=$produto['preco']?>" class="form-control" name="preco" placeholder="Insira o valor do produto">
    </div>
  </div>

    <div class="form-group">
  <label  for="descricao" id="labelDesc">Descricao:</label>
  <div class="col-sm-offset-2 col-sm-10"> 
  <textarea class="form-control" id="descricao" type="text" rows="2" name="descricao"><?=$produto['descricao']?></textarea>
</div>
</div>


  <div class="form-group checkbox">
    <label for="usado" id="labelusado">Usado:</label>
    <div class="col-sm-offset-2 col-sm-2"> 
    <input type="checkbox" checked="checked" <?=$usado?> id="usado" name="usado" value="true">
  </div>
    </div>


    <div class="form-group">
    <div class=" col-sm-offset-2 col-sm-3"> 
    <label for="select" id="labelCategoria"> Categoria:</label>
    <select class="form-control" name="categoria_id" id="selectProduto">
    <?php foreach($categorias as $categoria) : 
      $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
      $selecao = $essaEhACategoria ? "selected='selected'" : "";
    ?>
    <option value="<?=$categoria['id']?>" <?=$selecao?>>
                                <?=$categoria['nome']?>
    </option>
        <?php endforeach ?>
    </select>
    </div>
      </div>
      

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary" id="btnCadastrar">Alterar</button>
    </div>
  </div>

  </div>
  
</form>
</div>
</div>

<?php include("rodape.php");?>
