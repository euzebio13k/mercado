<?php
use App\Fornecedor;
use App\Produto;
include('../vendor/autoload.php');
$opcao = $_GET['opcao'];
$produto = new Produto();
switch($opcao){
    case 'cadastrar':
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $fornecedor = new Fornecedor();
        $fornecedor->id = $_POST['fornecedor'];
        $produto->fornecedor = $fornecedor;
        $produto->cadastrar();
        header('location: ../view/produto/listar.php');
    break;
    case 'alterar':
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $fornecedor = new Fornecedor();
        $fornecedor->id = $_POST['fornecedor'];
        $produto->fornecedor = $fornecedor;
        $produto->alterar();
        header('location: ../view/produto/listar.php');
    break;
    case 'excluir':
        $produto->id = $_GET['id'];
        $produto->excluir();
        header('location: ../view/produto/listar.php');
    break;
}