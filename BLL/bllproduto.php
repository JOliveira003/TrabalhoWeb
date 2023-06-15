<?php

namespace BLL; 
USE DAL\dalproduto;
include_once 'D:\xampp\htdocs\trabalhoweb\DAL\dalproduto.php'; 
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllproduto.php'; 
include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\produto.php'; 

class bllproduto {

    public function Select (){
        $dalproduto = new \DAL\dalproduto(); 
        return $dalproduto->Select();
    }
   

    public function Insert (\MODEL\produto $produto){
        $novoValor = $produto->getQtde_produto() + 1; 
        $produto->setQtde_produto($novoValor);
        $bllproduto->Update($produto); 

        $dal = new dalproduto(); 
        $dal->Insert($produto);  

        header("location: listarproduto.php"); 
    }
}
?>