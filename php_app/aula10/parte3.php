<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional switch com regioões do brasil</title>
</head>
<body>
    <?php
        $estado = $_GET ["estBr"] ? $_GET["estBr"] : 0;
        echo "estado correspondente a seleção: ". $estado;
    ?>
    <a href="javascript:history.go(-1)">voltar</a>
</body>
</html>