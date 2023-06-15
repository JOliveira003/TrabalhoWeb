<?php
    namespace BLL; 
    use DAL\dalfarmaceutico; 
    include_once '../../DAL/dalfarmaceutico.php';
    
    class bllfarmaceutico {
        public function Select (){
            $dal = new  \Dal\dalfarmaceutico(); 
            return $dal->Select();
        }
        public function SelectCod_farmaceutico (int $cod_farmaceutico){
            $dal = new  \Dal\dalfarmaceutico(); 
            return $dal->SelectCod_farmaceuticoe($cod_farmaceutico);
        }
        public function SelectNome_farmaceutico(string $nome_farmaceutico){
            $dalfarmaceutico = new dalfarmaceutico(); 
            return $dalfarmaceutico->SelectNome_farmaceutico($nome_farmaceutico);
        }
        public function Insert (\MODEL\farmaceutico $farmaceutico){
           $dal = new \DAL\dalfarmaceutico(); 
           $dal->Insert($farmaceutico);         
        }
        public function Update (\MODEL\farmaceutico $farmaceutico){
           $dal = new \DAL\dalfarmaceutico(); 
           $dal->Update($farmaceutico);         
        }
        public function Delete (int $cod_farmaceutico){
            $dal = new \DAL\dalfarmaceutico(); 
            $dal->Delete($cod_farmaceutico);           
         }
    }

?>