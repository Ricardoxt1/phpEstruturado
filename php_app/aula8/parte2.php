<!DOCTYPE html>
<html lang="en">
<head>
    <?php

        $texto = ($_GET["t"]) ? $_GET["t"] : "texto generico";
        $cor = ($_GET["cor"]) ? $_GET["cor"] : "#000000";
        $tamanho = $_GET["tam"] ? $_GET["tam"] : "12pt";

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editor de texto php</title>
    <style>
        span.texto {
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;

        }
    </style>
</head>
<body>
    <?php
        echo "<span class='texto'>$texto</span>";
    ?>
   <a href="index.html">voltar</a>
</body>
</html>