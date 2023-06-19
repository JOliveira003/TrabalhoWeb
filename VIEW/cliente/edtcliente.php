<?php
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllcliente.php';
$cod_cliente = $_GET['id'];

$bll = new  \BLL\bllcliente();
$cliente = $bll->SelectCod_cliente($cod_cliente);

echo $cliente->getNome_cliente();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Editar Cliente</h1>
        </div>

        <div class="row">
            <form action="recedtcliente.php" method="POST" cod_cliente="frminscliente" class="col s12">
                <div class="input-field col s8">
                    <label for="cod_cliente" class="black-text bold">COD: <?php echo $cliente->getCod_cliente(); ?></label>
                    </br> </br>
                    <input type="hidden" name="cod_cliente" value=<?php echo $cod_cliente; ?>>
                </div>

                <div class="input-field col s8">
                    <input cod_cliente="nome" type="text" name="nome" value="<?php echo $cliente->getNome_cliente() ?>">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input id="telefone" type="number" name="telefone" value="<?php echo $cliente->getTelefone_cliente() ?>">
                    <label for="aniversario" class="black-text bold">Telefone</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarcliente.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>


            </form>
        </div>



    </div>
    <?php include_once '../footer.php';?>
</body>

</html>