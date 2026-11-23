<?php

use App\Fornecedor;
include('../../vendor/autoload.php');
$fornecedores = Fornecedor::listar();
/*echo "<pre>";
print_r($fornecedores);
echo "</pre>";*/
?>
<a href="cadastrar.php">Cadastrar</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <?php
        foreach($fornecedores as $fornecedor){
            echo '<tr>';
            echo '<td>'.$fornecedor->id.'</td>';
            echo '<td>'.$fornecedor->nome.'</td>';
            echo '<td>'.$fornecedor->cnpj.'</td>';
            echo '<td><a href="editar.php?id='.$fornecedor->id.'"><button>Editar</button></a></td>';
            echo '<td><a href="../../action/action_fornecedor.php?
            opcao=excluir&id='.$fornecedor->id.'"><button>Excluir</button></a></td>';
            echo '</tr>';
        }
    ?>
</table>