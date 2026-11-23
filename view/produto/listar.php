<?php

use App\Produto;
include('../../vendor/autoload.php');
$produtos = Produto::listar();
/*echo "<pre>";
print_r($produtos);
echo "</pre>";*/
?>
<a href="cadastrar.php">Cadastrar</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Fornecedor</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <?php
        foreach($produtos as $produto){
            echo '<tr>';
            echo '<td>'.$produto->id.'</td>';
            echo '<td>'.$produto->nome.'</td>';
            echo '<td>'.$produto->preco.'</td>';
            echo '<td>'.$produto->fornecedor->nome.'</td>';
            echo '<td><a href="editar.php?id='.$produto->id.'"><button>Editar</button></a></td>';
            echo '<td><a href="../../action/action_produto.php?
            opcao=excluir&id='.$produto->id.'"><button>Excluir</button></a></td>';
            echo '</tr>';
        }
    ?>
</table>