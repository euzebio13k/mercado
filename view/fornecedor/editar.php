<?php

use App\Fornecedor;
include('../../vendor/autoload.php');
$id = $_GET['id'];
$fornecedor = Fornecedor::buscarPorId($id);
?>
<form method="post" action="../../action/action_fornecedor.php?opcao=alterar&id=<?= $id ?>">
    Nome: <input name="nome" type="text" value="<?= $fornecedor->nome ?>"><br>
    CNPJ: <input name="cnpj" type="text" value="<?= $fornecedor->cnpj ?>"><br>
    <button type="submit">Editar</button>
</form>