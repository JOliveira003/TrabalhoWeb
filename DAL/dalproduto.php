<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'D:\xampp\htdocs\trabalhoweb\MODEL\produto.php';


    class dalproduto{

        public function Select(){
          $sql = "select * from produto;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
        
          foreach($result as $linha){
                        
            $produto = new \MODEL\produto();
            echo $linha['nome_produto'];
            $produto->setCod_produto($linha['cod_produto']);
            $produto->setNome_produto($linha['nome_produto']);  
            $produto->setValor_produto($linha['valor_produto']);    
            $produto->setQtde_produto($linha['qtde_produto']);   

            $listarproduto[] = $produto; 

          }

         
          return  $listarproduto;
        }
        public function SelectCod_produto(int $cod_produto){ 
          $sql = "select * from produto where cod_produto=?;";
          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $query->execute (array($cod_produto));
          $linha = $query->fetch(\PDO::FETCH_ASSOC);
      
          Conexao::desconectar(); 
               
          $produto = new \MODEL\produto();
          $produto->setCod_produto($linha['cod_produto']);
          $produto->setNome_produto($linha['nome_produto']);  
          $produto->setValor_produto($linha['valor_produto']);    
          $produto->setQtde_produto($linha['qtde_produto']); 

          return  $produto;

        }

        public function SelectNome_produto(string $nome_produto){

          $sql = "select * from produto WHERE nome like  '%" . $nome_produto .  "%' order by nome;";

          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $result = $pdo->query($sql); 
                    
          $listarproduto = null; 
          foreach($result as $linha){
                        
            $produto = new \MODEL\produto();
    
            $produto->setCod_produto($linha['cod_produto']);
            $produto->setNome_produto($linha['nome_produto']);         
            $produto->setValor_produto($linha['valor_produto']);
            $produto->setQtde_produto($linha['qtde_produto']);

            $listarproduto[] = $produto; 

          }
          return  $listarproduto;
        }

        public function Update(\MODEL\produto $produto){
          $sql = "UPDATE produto SET nome_produto=?, qtde_produto=?, valor_produto=? WHERE cod_produto=?";

          $pdo = Conexao::conectar(); 
          $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
          $query = $pdo->prepare($sql);
          $result = $query->execute(array($produto->getNome_produto(), $produto->getQtde_produto(), $produto->getValor_produto(), $produto->getCod_produto()));
          $con = Conexao::desconectar();
          return  $result; 
        } 

        public function Insert(\MODEL\produto $produto){
          $con = Conexao::conectar(); 
          $sql = "INSERT INTO produto (nome_produto, valor_produto, qtde_produto) 
                 VALUES  ('{$produto->getNome_produto()}', '{$produto->getValor_produto()}', '{$produto->getQtde_produto()}');";
   
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          return $result; 

      }

      public function Delete(int $cod_produto){
        $sql = "DELETE from produto WHERE cod_produto=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($cod_produto));
        $con = Conexao::desconectar();
        return  $result; 
    }
    }
?> 