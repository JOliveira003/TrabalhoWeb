<?php 
   namespace MODEL; 

   class cliente{
        private ?int $cod; 
        private ?string $nome; 
        private ?int $telefone; 
        
        public function __construct() {   
        }
        public function getCod() {
            return $this->cod; 
        }
        public function setCod(int $cod){
            $this->cod = $cod; 
        }
        public function getNome() {
            return $this->nome; 
        }
        public function setNome(string $nome){
            $this->nome = $nome; 
        }
        public function getTelefone() {
            return $this->telefone; 
        }
        public function setTelefone(string $telefone){
            $this->telefone = $telefone; 
        }
   }

?>