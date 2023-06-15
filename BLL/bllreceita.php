<?php
    namespace BLL; 
    use DAL\dalreceita; 
    include_once '../../DAL/dalreceita.php';
    
    class bllreceita {
        public function Select (){
            $dal = new  \Dal\dalreceita(); 
            return $dal->Select();
        }

        public function SelectCod_receita (int $cod_receita){
            $dal = new  \Dal\dalcliente(); 
            return $dal->SelectCod_receita($cod_receita);
        }

        public function Insert (\MODEL\receita $receita){
           $dal = new \DAL\dalreceita(); 
           $dal->Insert($receita);         
        }

        public function Update (\MODEL\receita $receita){
           $dal = new \DAL\dalreceita(); 
           $dal->Update($receita);         
        }

        public function Delete (int $cod_receita){
            $dal = new \DAL\dalreceita(); 
            $dal->Delete($cod_receita);           
         }
    }

?>