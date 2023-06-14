<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional if</title>
</head>
<body>
    <?php
        $nascimento = ($_GET["nasc"])? $_GET["nasc"] : 1900;
        $idade = date("Y") - $nascimento;
        echo "<br/> idade: $idade anos";
        

        if ($idade <= 16 || $idade >= 65){
            echo "<br/> usuario não é obrigado a votar";
        } elseif ($idade >= 16 && $idade <= 18){
            echo "<br/> usuario tem opção de realizar a votação";
        } else {
            echo "<br/> usuario é obrigado a votar";
        }
    ?>
    <a href="index.html">voltar</a>
</body>
</html>