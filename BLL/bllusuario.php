<?php
    namespace BLL; 
    use DAL\dalusuario; 
    include_once 'D:\xampp\htdocs\trabalhoweb\DAL\dalusuario.php';
    
    class bllusuario {
        public function SelectUser (string $usuario){
            $dal = new  \Dal\dalusuario(); 
           
            return $dal->SelectUser($usuario);
        }
    }
?>