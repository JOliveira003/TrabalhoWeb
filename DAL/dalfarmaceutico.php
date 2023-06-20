<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'D:\xampp\htdocs\trabalhoweb\MODEL\farmaceutico.php';

    class dalfarmaceutico{

        public function Select(){
          $sql = "select * from farmaceutico;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
        
          foreach($result as $linha){
                        
            $farmaceutico = new \MODEL\farmaceutico();
            echo $linha['nome_farmaceutico'];
            $farmaceutico->setCod_farmaceutico($linha['cod_farmaceutico']);
            $farmaceutico->setNome_farmaceutico($linha['nome_farmaceutico']);   

            $listarfarmaceutico[] = $farmaceutico; 
          }
          return  $listarfarmaceutico;
        }

        public function SelectCod_farmaceutico(int $cod_farmaceutico){ 
          $sql = "select * from farmaceutico where cod_farmaceutico=?;";
          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $query->execute (array($cod_farmaceutico));
          $linha = $query->fetch(\PDO::FETCH_ASSOC);
      
          Conexao::desconectar(); 
               
          $farmaceutico = new \MODEL\farmaceutico();
          $farmaceutico->setCod_farmaceutico($linha['cod_farmaceutico']);
          $farmaceutico->setNome_farmaceutico($linha['nome_farmaceutico']); 
          return  $farmaceutico;

        }
        public function SelectNome_farmaceutico(string $nome_farmaceutico){

          $sql = "select * from farmaceutico WHERE nome like  '%" . $nome_farmaceutico .  "%' order by nome;";

          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $result = $pdo->query($sql); 
                    
          $listarfarmaceutico = null; 
          foreach($result as $linha){
                        
            $farmaceutico = new \MODEL\farmaceutico();
    
            $farmaceutico->setCod_farmaceutico($linha['cod_farmaceutico']);
            $farmaceutico->setNome_farmaceutico($linha['nome_farmaceutico']);         
    
            $listarfarmaceutico[] = $farmaceutico; 

          }
          return  $listarfarmaceutico;
        }

        public function Insert(\MODEL\farmaceutico $farmaceutico){
          $con = Conexao::conectar(); 
          $sql = "INSERT INTO farmaceutico (nome_farmaceutico) 
                 VALUES  ('{$farmaceutico->getNome_farmaceutico()}');";
   
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          return $result; 

      }

        public function Update(\MODEL\farmaceutico $farmaceutico){
          $sql = "UPDATE farmaceutico SET nome_farmaceutico=? WHERE cod_farmaceutico=?";

          $pdo = Conexao::conectar(); 
          $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
          $query = $pdo->prepare($sql);
          $result = $query->execute(array($farmaceutico->getNome_farmaceutico(), $farmaceutico->getCod_farmaceutico()));
          $con = Conexao::desconectar();
          return  $result; 
      }

      public function Delete(int $cod_farmaceutico){
        $sql = "DELETE from farmaceutico WHERE cod_farmaceutico=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($cod_farmaceutico));
        $con = Conexao::desconectar();
        return  $result; 
    }
    }
?> 