<?php 
require_once("cabecalho.php");
require_once("classProduto.php");
require_once("banco-produto.php");


$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST['categoria_id'];

if(array_key_exists('usado',$_POST)){
  $produto->usado = "true";
}else{
  $produto->usado = "false";
}

      if(insereProduto($conexao,$produto)) { ?>
      <p class = "text-success">Produto <?= $produto->nome ?>,com o valor de <?= $produto->preco; ?> cadastrado com sucesso</p>
    <?php  } else { 
      $msg = mysqli_error($conexao);    
      ?>
      <p class = "text-danger">Produto <?= $produto->nome; ?>nao foi adicionado,<?= $msg ?> </p>
      <?php
      }
      ?>
     
<?php require_once("rodape.php");?>
