<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"> </script>
    <script type="text/javascript" src="../js/init.js"></script>


    <title>Inserir Novo Cliente</title>
</head>

<body>
    <?php
    include_once '../menu.php';
    include_once  'D:\xampp\htdocs\trabalhoweb\BLL\bllcliente.php';
    ?>
    <div class="container cyan darken-2 black-text col s12">
        <div class="center cyan darken-1 col s12">
            <h1>Inserir Novo Cliente</h1>
        </div>
        <div class="row">
            <form action="recinscliente.php" method="POST" id="frmInscliente" name="frmInscliente" class="col s12">

                <div class="input-field col s8">
                    <label for="nome" class="black-text bold">Informe o Nome:</label>
                    <input id="nome" name="nome" type="text">
                </div>

                <div class="input-field col s8">
                    <label for="telefone" class="black-text bold">Informe o Telefone:</label>
                    <input id="telefone" name="telefone" type="number">
                </div>
                <div class="cyan darken-2 center col s12">
                    <br />
                    <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="btnLimpar">Limpar
                        <i class="material-icons right">clear_all</i>
                    </button>
                    <br />
                    <br />
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</body>
 <?php include_once '../footer.php' ?> 

</html>