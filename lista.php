<?php require_once("cabecalho.php");
      require_once("banco-produto.php");
      require_once("logica-usuario.php");
      require_once("mostra-alerta.php");

verificaUsuario();
?>
<?php
$produtos = listaProdutos($conexao);
?>
<?php
mostraAlerta("success");
mostraAlerta("danger");
?>
<table class="table table-borded table-responsive"id="tabela">
  <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descricao</th>
        <th>Usado</th>
        <th>Categoria</th>
        <th>Alterar</th>
        <th>Remover</th>
    </tr>

<?php
foreach($produtos as $produto) :
?>

    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'],0,20) ?></td>
        <td><?= $produto['usado'] ?></td>
        <td><?= $produto['categoria_nome'] ?></td>
        <td><a  class="btn btn-primary"href="formulario-altera-produto.php?id=<?=$produto['id']?>">Alterar</a>
    
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
<?php
endforeach
?>
</table>
