<?php 
   namespace MODEL; 

   class farmaceutico{
        private ?int $cod_farmaceutico; 
        private ?string $nome_farmaceutico; 
        
        public function __construct() {   
        }
        public function getCod_farmaceutico() {
            return $this->cod_farmaceutico; 
        }
        public function setCod_farmaceutico(int $cod_farmaceutico){
            $this->cod_farmaceutico = $cod_farmaceutico; 
        }
        public function getNome_farmaceutico() {
            return $this->nome_farmaceutico; 
        }
        public function setNome_farmaceutico(string $nome_farmaceutico){
            $this->nome_farmaceutico = $nome_farmaceutico; 
        }
    }
?>