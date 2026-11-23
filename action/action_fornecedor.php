<?php
use App\Fornecedor;
include('../vendor/autoload.php');
$opcao = $_GET['opcao'];
$fornecedor = new Fornecedor();
switch($opcao){
    case 'cadastrar':
        $fornecedor->nome = $_POST['nome'];
        $fornecedor->cnpj = $_POST['cnpj'];
        $fornecedor->cadastrar();
        header('location: ../view/fornecedor/listar.php');
    break;
    case 'alterar':
        $fornecedor = Fornecedor::buscarPorId($_GET['id']);
        $fornecedor->nome = $_POST['nome'];
        $fornecedor->cnpj = $_POST['cnpj'];
        $fornecedor->alterar();
        header('location: ../view/fornecedor/listar.php');
    break;
    case 'excluir':
        $fornecedor->id = $_GET['id'];
        $fornecedor->excluir();
        header('location: ../view/fornecedor/listar.php');
    break;
}