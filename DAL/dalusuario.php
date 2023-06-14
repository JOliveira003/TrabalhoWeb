<?php

namespace DAL;

include_once 'D:\xampp\htdocs\trabalhoweb\DAL\conexao.php';
include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\Usuario.php';


class dalusuario{

    public function SelectUser(string $usuario){
        $sql = "select * from usuario where usuario LIKE ?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $usuario = new \MODEL\usuario();

        if ($linha != null) {
            $usuario->setCod($linha['cod']);
            $usuario->setUsuario($linha['usuario']);
            $usuario->setSenha($linha['senha']);
            $usuario->setEmail($linha['email']);
        }

        return $usuario;
    }
}