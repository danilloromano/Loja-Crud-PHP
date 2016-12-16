<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();
$categorias = listaCategoria($conexao);
?>

<h1>Formulario Produtos</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="produtoFormulario">
<form class="form-horizontal"id="formularioCadastro" action="produto.php" method="post">
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do produto">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="preco">Valor:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" id="preco" name="preco" placeholder="Insira o valor do produto">
    </div>
  </div>

    <div class="form-group">
  <label for="descricao" id="labelDesc">Descricao:</label>
  <div class="col-sm-offset-2 col-sm-10"> 
  <textarea class="form-control" type="text" rows="2" id="descricao" name="descricao" placeholder="Descreva o produto"></textarea>
</div>
</div>

  <div class="form-group checkbox">
    <label for="usado" id="labelusado">Usado:</label>
    <div class="col-sm-offset-2 col-sm-2"> 
    <input type="checkbox" id="usado" name="usado" value="true">
  </div>
    </div>

    <div class="form-group">
    <div class=" col-sm-offset-2 col-sm-3"> 
    <label for="select" id="labelCategoria"> Categoria:</label>
    <select class="form-control"name="categoria_id" id="selectProduto">
    <?php foreach($categorias as $categoria) : ?>
    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
        <?php endforeach ?>
    </select>
    </div>
      </div>

<div class="form-group"> 
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
    </div>
  </div>
  
 

</form>
  </div>
  </div>
<?php include("rodape.php");?>
