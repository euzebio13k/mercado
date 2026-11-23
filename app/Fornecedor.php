<?php
namespace App;
use App\DataBase;
use PDO;
class Fornecedor{
    public $id;
    public $nome;
    public $cnpj;

    public function cadastrar(){
        $db = new DataBase('fornecedor');
        $db->insert([
            'nome' => $this->nome,
            'cnpj' => $this->cnpj
        ]);
    }
    public function alterar(){
        $db = new DataBase('fornecedor');
        $db->update('id='.$this->id,[
            'nome' => $this->nome,
            'cnpj' => $this->cnpj
        ]);
    }
    public function excluir(){
       return (new DataBase('fornecedor'))->delete('id='.$this->id); 
    }
    public static function listar($where = null, $order = null, $limit = null){
        return (new DataBase('fornecedor'))->select($where = null, $order = null, $limit = null)->fetchAll(PDO::FETCH_CLASS,self::class);
    }
    public static function buscarPorId($id){
        return (new DataBase('fornecedor'))->select('id='.$id)->fetchObject(self::class);
    }
}