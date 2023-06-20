<?php
    namespace BLL; 
    use DAL\dalproduto; 
    include_once '../../DAL/dalproduto.php';

class bllproduto {
    public function Select(){
        $dal = new  \Dal\dalproduto(); 
        return $dal->Select();
    }

    public function SelectCod_produto (int $cod_produto){
        $dal = new  \Dal\dalproduto(); 
        return $dal->SelectCod_produto($cod_produto);
    }
    
    public function SelectNome_produto(string $nome_produto){
        $dalproduto = new dalproduto(); 
        return $dalproduto->SelectNome_produto($nome_produto);
    }

    public function Insert (\MODEL\produto $produto){
       $dal = new \DAL\dalproduto(); 
       $dal->Insert($produto);         
    }

    public function Update (\MODEL\produto $produto){
       $dal = new \DAL\dalproduto(); 
       $dal->Update($produto);         
    }

    public function Delete (int $cod_produto){
        $dal = new \DAL\dalproduto(); 
        $dal->Delete($cod_produto);           
     }
}

?>