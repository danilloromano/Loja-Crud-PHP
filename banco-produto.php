<?php

//function listaProdutos($conexao){
//$produtos = array();
//$resultado = mysqli_query($conexao,"select * from produtos");
//while($produto = mysqli_fetch_assoc($resultado)){
//array_push($produtos, $produto);
 //   }
//return $produtos;
//}
require_once("classProduto.php");
require_once("conecta.php");

function insereProduto($conexao,Produto $produto){
$nome = mysqli_real_escape_string($conexao,$produto->nome);
$descricao = mysqli_real_escape_string($conexao,$produto->descricao);
$query = "insert into produtos (nome, preco,descricao,categoria_id,usado) values ('{$produto->nome}',{$produto->preco},'{$produto->descricao}',{$produto->categoria_id},{$produto->usado})"; 
return  mysqli_query($conexao, $query);  
}

function removeProduto($conexao,$id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
        categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;

}
