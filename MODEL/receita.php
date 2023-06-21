<?php 
namespace MODEL; 

class receita{
    private ?int $cod_receita; 
    private ?int $cod_produto;
    private ?int $cod_farmaceutico;
    private ?int $cod_cliente;
    private ?float $valor;
     
    public function __construct(){
    }

    public function getCod_receita(){
        return $this->cod_receita; 
    }
    public function setCod_receita(int $cod_receita){
        $this->cod_receita = $cod_receita; 
    }

    public function getCod_produto(){
        return $this->cod_produto; 
    }
    public function setCod_produto(int $cod_produto){
        $this->cod_produto = $cod_produto; 
    }

    public function getCod_farmaceutico(){
        return $this->cod_farmaceutico; 
    }
    public function setCod_farmaceutico(int $cod_farmaceutico){
        $this->cod_farmaceutico = $cod_farmaceutico; 
    }

    public function getCod_cliente(){
        return $this->cod_cliente; 
    }
    public function setCod_cliente(int $cod_cliente){
        $this->cod_cliente = $cod_cliente; 
    }

    public function getValor(){
        return $this->valor; 
    }    
    public function setValor(float $valor){
        $this->valor = $valor; 
    }     
}