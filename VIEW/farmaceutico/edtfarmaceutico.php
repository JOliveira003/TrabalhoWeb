<?php
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllfarmaceutico.php';
$cod_farmaceutico = $_GET['id'];

$bll = new  \BLL\bllfarmaceutico();
$farmaceutico = $bll->SelectCod_farmaceutico($cod_farmaceutico);

echo $farmaceutico->getNome_farmaceutico();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Farmaceutico</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container cyan darken-2 black-text col s12">
        <div class="center cyan darken-1">
            <h1>Editar Farmaceutico</h1>
        </div>

        <div class="row">
            <form action="recedtfarmaceutico.php" method="POST" cod_farmaceutico="frminsfarmaceutico" class="col s12">
                <div class="input-field col s8">
                    <label for="cod_farmaceutico" class="black-text bold">COD: <?php echo $farmaceutico->getCod_farmaceutico(); ?></label>
                    </br> </br>
                    <input type="hidden" name="cod_farmaceutico" value=<?php echo $cod_farmaceutico; ?>>
                </div>

                <div class="input-field col s8">
                    <input cod_farmaceutico="nome" type="text" name="nome" value="<?php echo $farmaceutico->getNome_farmaceutico() ?>">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                <div class="cyan darken-2 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarfarmaceutico.php'">
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