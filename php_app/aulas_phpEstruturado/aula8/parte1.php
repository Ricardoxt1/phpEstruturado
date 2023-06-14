<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML + PHP</title>
</head>
<body>
    <?php
        // echo "<h1>Integração HTML + PHP</h1>";
        // $valor = $_GET["v"];
        // $raiz = sqrt($valor);
        // echo "raiz quadrada do valor de $valor = ". number_format($raiz, 2);
        $nome = isset($_GET["n"])? $_GET["n"]:["nome não declarado"];
        $nascimento = isset ($_GET["i"])? $_GET["i"]: ["nascimento não declarado"];
        $sexo = isset ($_GET["s"]) ? $_GET["s"]: ["sexo não declarado"];
        $anoAtual = date("Y");
        $calcularIdade = $anoAtual - $nascimento;

        echo "$nome, sendo $sexo, nasceu em $nascimento e possui $calcularIdade anos.";
    ?>
    <a href="index.html">voltar</a>
</body>
</html>