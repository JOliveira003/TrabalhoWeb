<?php
    namespace BLL; 
    use DAL\dalcliente; 
    include_once '../../DAL/dalcliente.php';
    
    class bllOperador {
        public function Select (){
            $dal = new  \Dal\dalcliente(); 
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalcliente(); 
            return $dal->SelectID($id);
        }
        
        public function SelectNome(string $nome){
            $dalcliente = new dalcliente(); 
            return $dalcliente->SelectNome($nome);
        }

        public function Insert (\MODEL\cliente $cliente){
           $dal = new \DAL\dalcliente(); 
           $dal->Insert($cliente);         
        }

        public function Update (\MODEL\cliente $cliente){
           $dal = new \DAL\dalcliente(); 
           $dal->Update($cliente);         
        }

        public function Delete (int $id){
            $dal = new \DAL\dalcliente(); 
            $dal->Delete($id);           
         }
    }

?>