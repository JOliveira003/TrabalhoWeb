<?php 
   namespace MODEL; 

   class cliente{
        private ?int $cod_cliente; 
        private ?string $nome_cliente; 
        private ?int $telefone_cliente; 
        
        public function __construct() {   
        }
        public function getCod_cliente() {
            return $this->cod_cliente; 
        }
        public function setCod_cliente(int $cod_cliente){
            $this->cod_cliente = $cod_cliente; 
        }
        public function getNome_cliente() {
            return $this->nome_cliente; 
        }
        public function setNome_cliente(string $nome_cliente){
            $this->nome_cliente = $nome_cliente; 
        }
        public function getTelefone_cliente() {
            return $this->telefone_cliente; 
        }
        public function setTelefone_cliente(int $telefone_cliente){
            $this->telefone_cliente = $telefone_cliente; 
        }
   }

?>