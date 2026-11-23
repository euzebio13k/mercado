<?php
include('../../vendor/autoload.php');
use App\Fornecedor;
$fornecedores = Fornecedor::listar();
?>
<form method="post" action="../../action/action_produto.php?opcao=cadastrar">
    Nome: <input name="nome" type="text"><br>
    Preço: <input name="preco" type="text"><br>
    Fornecedor: <select name="fornecedor">
        <option>Selecione um fornecedor ...</option>
        <?php
        foreach($fornecedores as $fornecedor){
            echo '<option value="'.$fornecedor->id.'">'.$fornecedor->nome.'</option>';
        }
        ?>
    </select>
    <button type="submit">Cadastrar</button>
</form>