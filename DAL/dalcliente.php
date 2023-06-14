<?php
    namespace DAL;

use MODEL\cliente;

    include_once 'conexao.php';
    include_once  'D:\xampp\htdocs\TrabalhoWeb\MODEL\cliente.php';
    
    
    class dalcliente {

        public function Select() {

          $con = Conexao::conectar(); 
          $sql = "select * from cliente;";
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          foreach($result as $linha){
               $operador = new \MODEL\cliente();

               $cliente->setCod($linha['cod']); 
               $cliente->setNome($linha['nome']);
               $cliente->setTelefone($linha['telefone']); 
               $listarcliente[]= $cliente; 
          }

          return $listarcliente;            
        }

        public function SelectID(int $id){
            $sql = "select * from cliente where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $cliente = new \MODEL\cliente(); 
            $cliente->setCod($linha['cod']); 
            $cliente->setNome($linha['nome']);
            $cliente->setTelefone($linha['telefone']); 

            return $cliente; 
        }

        public function SelectNome(string $nome){

            $sql = "select * from cliente WHERE nome like  '%" . $nome .  "%' order by nome;";
  
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $result = $pdo->query($sql); 
                      
            $listarcliente = null; 
            foreach($result as $linha){
                          
              $cliente = new \MODEL\cliente();
      
              $cliente->setCod($linha['cod']);
              $cliente->setNome($linha['nome']);         
              $cliente->setTelefone($linha['telefone']); 
      
              $listarcliente[] = $cliente; 
  
            }
            return  $listarcliente;
          }


        public function Insert(\MODEL\cliente $cliente){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO cliente (nome, telefone) 
                   VALUES  ('{$cliente->getNome()}', '{$cliente->getTelefone()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\cliente $cliente){
            $sql = "UPDATE cliente SET nome=?, telefone=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cliente->getNome(), $cliente->getTelefone(), $cliente->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function DElete(int $id){
            $sql = "DELETE from cliente WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 