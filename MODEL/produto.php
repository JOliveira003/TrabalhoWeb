<?php 
namespace MODEL; 

class produto {
    private ?int $cod_produto; 
    private ?string $nome_produto; 
    private ?float $valor_produto;
    private ?int $qtde_produto; 

    public function __construct(){   
    }
    
    public function getCod_produto(){
        return $this->cod_produto; 
    }
    public function setCod_produto(int $cod_produto){
        $this->cod_produto = $cod_produto; 
    }

    public function getNome_produto(){
        return $this->nome_produto; 
    }
    public function setNome_produto(string $nome_produto){
        $this->nome_produto = $nome_produto; 
    }

    public function getValor_produto(){
        return $this->valor_produto; 
    }
    public function setValor_produto(float $valor_produto){
        $this->valor_produto = $valor_produto; 
    }

    public function getQtde_produto(){
        return $this->qtde_produto; 
    }
    public function setQtde_produto(int $qtde_produto){
        $this->qtde_produto = $qtde_produto; 
    }
}
?>