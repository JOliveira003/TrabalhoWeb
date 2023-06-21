<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'D:\xampp\htdocs\trabalhoweb\MODEL\receita.php';

    class dalreceita{

        public function Select(){
          $sql = "select * from receita;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          

          foreach($result as $linha){
                        
            $receita = new \MODEL\receita();
            echo $linha['valor'];
            $receita->setCod_receita($linha['cod_receita']);
            $receita->setCod_produto($linha['cod_produto']);  
            $receita->setCod_farmaceutico($linha['cod_farmaceutico']);
            $receita->SetCod_cliente($linha['cod_cliente']);
            $receita->SetValor($linha['valor']);


            $listarreceita[] = $receita; 

          }
          return  $listarreceita;
        }

        public function SelectCod_receita(int $cod_receita){ 
          $sql = "select * from receita where cod_receita=?;";
          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $query->execute (array($cod_receita));
          $linha = $query->fetch(\PDO::FETCH_ASSOC);
      
          Conexao::desconectar(); 
               
          $receita = new \MODEL\receita();
          $receita->setCod_receita($linha['cod_receita']);
          $receita->setCod_produto($linha['cod_produto']);  
          $receita->setCod_farmaceutico($linha['cod_farmaceutico']);
          $receita->SetCod_cliente($linha['cod_cliente']);
          $receita->SetValor($linha['valor']);

          return  $receita;

        }

        public function Insert(\MODEL\receita $receita){
          $con = Conexao::conectar(); 
          $sql = "INSERT INTO receita (cod_produto, cod_farmaceutico, cod_cliente, valor) 
                 VALUES  ('{$receita->getCod_produto()}', '{$receita->getCod_farmaceutico()}', '{$receita->getCod_cliente()}', '{$receita->getValor()}');";
   
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          return $result; 

      }

        public function Update(\MODEL\receita $receita){
          $sql = "UPDATE receita SET cod_produto=?, cod_farmaceutico=?, cod_cliente=?, valor=? WHERE cod_receita=?";

          $pdo = Conexao::conectar(); 
          $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
          $query = $pdo->prepare($sql);
          $result = $query->execute(array($receita->getCod_produto(), $receita->getCod_farmaceutico(), $receita->getCod_cliente(), $receita->getValor(), $receita->getCod_receita()));
          $con = Conexao::desconectar();
          return  $result; 
      }

      public function Delete(int $cod_receita){
        $sql = "DELETE from receita WHERE cod_receita=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($cod_receita));
        $con = Conexao::desconectar();
        return  $result; 
    }
    }
?> 