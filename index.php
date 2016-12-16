<?php require_once('cabecalho.php');
require_once("logica-usuario.php");
?>

<?php
mostraAlerta("success");
mostraAlerta("danger");
?>

 <?php
if(usuarioEstaLogado()) {
?>
<p class="text-success loginMessage">Você está logado como <?= usuarioLogado() ?></p>
<?php
}
?>

<h1>Bem Vindo</h1>

<div class="login">
<div class="modal-body">
        <div class="col-xs-4">
            <div class="well" id="loginFormulario">
                <form id="loginForm" method="POST" action="login.php">
                    <div class="form-group">
                       <label for="email" class="control-label">Email</label>
                       <input type="email" class="form-control" name="email" required="" placeholder="insira seu email">
                    </div>
                        <div class="form-group">
                            <label for="senha" class="control-label">Senha</label>
                            <input type="password" class="form-control" name="senha" placeholder="insira sua senha" required="">         
                        </div>
                     <div class="form-group">
                          <button type="submit" class="btn btn-primary" id="btnLogin">Login</button>                        </div>
                     </div>
                </div> 
            </div>
        </div>

</div>
    
<?php include('rodape.php');?>
