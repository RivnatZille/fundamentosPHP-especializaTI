<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 - Especializa TI - Meu site em PHP</title>
</head>
<body>
    <?php
        //include('includes/header.php');
        require('includes/header.php');

        //include inclui o arquivo e seu código, se não der certo, ele continua na execução do restante do código
        //já o require impedirá o resto do código de rodar se o arquivo solicitado não existir/não for encontrado
    ?>

    <div>
        <?php
        echo 'Sou o conteúdo do site!';
        ?>
    </div>

    <?php
        include('includes/footer.php');
    ?>
</body>
</html>