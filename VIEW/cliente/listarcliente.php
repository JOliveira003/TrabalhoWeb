<?php
    echo __DIR__; 
     
    include 'D:\xampp\htdocs\trabalhoweb\DAL\conexao.php';
    use DAL\Conexao;
    $sql = "select * from cliente;";
    $con = Conexao::conectar(); 
    $listarcliente = $con->query($sql); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <table class="striped blue lighten-2" >
        <tr>
            <th>CODIGO</th>
            <th>NOME</th>
            <th>TELEFONE</th>
        </tr>
        <?php 
            foreach ($listarcliente as $cliente){
        ?>
            <tr>
                <td><?php echo $cliente['cod_cliente']; ?></td>
                <td><?php echo $cliente['nome_cliente']; ?></td>
                <td><?php echo $cliente['telefone_cliente']; ?></td>
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>