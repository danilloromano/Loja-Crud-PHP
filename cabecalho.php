<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php");

?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="meucss/bootstrap.css" rel="stylesheet" />
    <link href="meucss/loja.css" rel="stylesheet" />
</head>

<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="formulario-produto.php">Cadastro de Produtos</a></li>
      <li><a href="lista.php">Lista de Produtos</a></li>
      <li><a href="contato.php">Contato</a></li>
      <li><a href="logout.php">Deslogar</a></li>
    </ul>
  </div>
</nav>

    <div class="container">

    <div class="principal">