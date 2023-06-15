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

               $cliente->setCod_cliente($linha['cod_cliente']); 
               $cliente->setNome_cliente($linha['nome_cliente']);
               $cliente->setTelefone_cliente($linha['telefone_cliente']); 
               $listarcliente[]= $cliente; 
          }

          return $listarcliente;            
        }

        public function SelectCod_cliente(int $cod_cliente){
            $sql = "select * from cliente where cod_cliente=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($cod_cliente));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $cliente = new \MODEL\cliente(); 
            $cliente->setCod_cliente($linha['cod_cliente']); 
            $cliente->setNome_cliente($linha['nome_cliente']);
            $cliente->setTelefone_cliente($linha['telefone_cliente']); 

            return $cliente; 
        }

        public function SelectNome(string $nome_cliente){

            $sql = "select * from cliente WHERE nome like  '%" . $nome_cliente .  "%' order by nome;";
  
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $result = $pdo->query($sql); 
                      
            $listarcliente = null; 
            foreach($result as $linha){
                          
              $cliente = new \MODEL\cliente();
      
              $cliente->setCod_cliente($linha['cod_cliente']);
              $cliente->setNome_cliente($linha['nome_cliente']);         
              $cliente->setTelefone_cliente($linha['telefone_cliente']); 
      
              $listarcliente[] = $cliente; 
  
            }
            return  $listarcliente;
          }


        public function Insert(\MODEL\cliente $cliente){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO cliente (nome_cliente, telefone_cliente) 
                   VALUES  ('{$cliente->getNome_cliente()}', '{$cliente->getTelefone_cliente()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\cliente $cliente){
            $sql = "UPDATE cliente SET nome_cliente=?, telefone_cliente=? WHERE cod_cliente=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cliente->getNome_cliente(), $cliente->getTelefone_cliente(), $cliente->getCod_cliente()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function Delete(int $cod_cliente){
            $sql = "DELETE from cliente WHERE cod_cliente=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod_cliente));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 