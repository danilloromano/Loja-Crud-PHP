<?php
require_once("cabecalho.php"); 
?>
<h1>Contato</h1>
<div class="modal-body" id="formModal">
  <div class="well" id="produtoFormulario">
<form class="form-horizontal"id="formularioCadastro" action="envia-contato.php" method="post">

 <div class="form-group">
    <label class="control-label col-sm-2" for="preco">Nome:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control"  name="nome" placeholder="Insira o nome">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="mail" class="form-control" name="email" placeholder="Insira o email">
    </div>
  </div>

    <div class="form-group">
  <label for="mensagem" id="labelDesc">Mensagem:</label>
  <div class="col-sm-offset-2 col-sm-10"> 
  <textarea class="form-control" type="text" rows="5"  name="mensagem" placeholder="Escreva sua mensagem"></textarea>
</div>
</div>

<div class="form-group"> 
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="btnEmail">Enviar</button>
    </div>
  </div>

</form>
  </div>
  </div>

<?php
require_once("rodape.php"); 
?>