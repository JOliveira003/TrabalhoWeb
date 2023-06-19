<?php
    namespace BLL; 
    use DAL\dalcliente; 
    include_once '../../DAL/dalcliente.php';
    
    class bllcliente {
        public function Select(){
            $dal = new  \Dal\dalcliente(); 
            return $dal->Select();
        }

        public function SelectCod_cliente (int $cod_cliente){
            $dal = new  \Dal\dalcliente(); 
            return $dal->SelectCod_cliente($cod_cliente);
        }
        
        public function SelectNome_cliente(string $nome_cliente){
            $dalcliente = new dalcliente(); 
            return $dalcliente->SelectNome_cliente($nome_cliente);
        }

        public function Insert (\MODEL\cliente $cliente){
           $dal = new \DAL\dalcliente(); 
           $dal->Insert($cliente);         
        }

        public function Update (\MODEL\cliente $cliente){
           $dal = new \DAL\dalcliente(); 
           $dal->Update($cliente);         
        }

        public function Delete (int $cod_cliente){
            $dal = new \DAL\dalcliente(); 
            $dal->Delete($cod_cliente);           
         }
    }

?>