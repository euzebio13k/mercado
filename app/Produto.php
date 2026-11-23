<?php
namespace App;
use App\Fornecedor;
use App\DataBase;
use PDO;
class Produto{
    public $id;
    public $nome;
    public $preco;
    public $fornecedor;

    public function cadastrar(){
        $db = new DataBase('produto');
        $db->insert([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'fornecedor_id' => $this->fornecedor->id
        ]);
    }
    public function alterar(){
        $db = new DataBase('produto');
        $db->update('id='.$this->id,[
            'nome' => $this->nome,
            'preco' => $this->preco,
            'fornecedor_id' => $this->fornecedor->id
        ]);
    }
    public function excluir(){
       return (new DataBase('produto'))->delete('id='.$this->id); 
    }
    public static function listar($where = null, $order = null, $limit = null){
        $produtos = (new DataBase('produto'))->select($where = null, $order = null, $limit = null)->fetchAll(PDO::FETCH_CLASS,self::class);
        foreach($produtos as $produto){
            $produto->fornecedor = Fornecedor::buscarPorId($produto->fornecedor_id);
        }
        return $produtos;
    }
    public static function buscarPorId($id){
        $produto = (new DataBase('produto'))->select('id='.$id)->fetchObject(self::class);
        $produto->fornecedor = Fornecedor::buscarPorId($produto->fornecedor_id);
        return $produto;
    }
}