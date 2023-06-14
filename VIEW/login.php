<?php
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllUsuario.php';
include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\usuario.php';

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

echo "Usuario: " . $usuario . "</br>";
echo "Senha: " . md5($senha) . "</br>" . "</br>";

$bll = new  \BLL\bllusuario();

$objUsuario = new \MODEL\usuario();

$objUsuario = $bll->SelectUser($usuario);

if ($objUsuario != null) {
    if (md5($senha) == $objUsuario->getSenha()){
        session_start();
        $_SESSION['login'] =  $objUsuario->getUsuario() ;
        header("location:menu.php");
    }
    else header("location:index.php");
}
else echo "usuario não encontrado";

?>