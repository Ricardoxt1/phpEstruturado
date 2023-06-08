<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções</title>
</head>
<body>
    <h2>função 1 - printf</h2>
    <?php
        $prod = "leite";
        $preço = 4.5;
        printf("O %s está custando R$ %.2f", $prod, $preço);
    ?>
    <h2>função 2 - print_r</h2>
    <?php
        //serve para periodos de testes
        $x[0] = 2;
        $x[1] = 4;
        $x[2] = 6;
        // print_r($x);
        $v2 = array(2,4,5,7,9,12,56);
        print_r($v2);
        echo "<b>print_r</b> <br/>";        
        var_dump($v2);
        echo "<b>var_dump</b> <br/>";
        var_export($v2);
        echo "<b> var_export</b> <br/>";
    ?>
    <h2>função 3 - wordwrap</h2>
    <?php
        $t = "lorem Ips et dolor sit amet, consectetur adipis nisl, sed do eiusmod tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim ven";
        $r = wordwrap($t, 20, "<br/>\n", false);
        echo $r;
    ?>
    <h2>função 4 - strlen</h2>
    <?php
        $t = "lorem Ips et dolor sit amet, consectetur";
        $c = strlen($t);
        echo "quantidade de letras: $c";
    ?>
    <h2>função 5 - trim</h2>
    <?php
        $texto = "   lorem Ips et dolor sit amet, consectetur  ";
        echo("texto sem trim: ". strlen("$texto"));
        echo "<br/>\n";
        $novo = trim($texto);
        echo($novo);
        echo "<br/>\n";
        echo("texto aplicando trim e contando novamente com strlen: ". strlen($novo));
    ?>
    <h2>função 6 - ltrim</h2>
    <?php
        $texto = "   lorem Ips et dolor sit amet, consectetur  ";
        echo("texto sem trim: ". strlen("$texto"));
        echo "<br/>\n";
        $novo = ltrim($texto);
        echo($novo);
        echo "<br/>\n";
        echo("texto aplicando trim e contando novamente com strlen: ". strlen($novo));
    ?>
    <h2>função 7 - rtrim</h2>
    <?php
        $texto = "   lorem Ips et dolor sit amet, consectetur  ";
        echo("texto sem trim: ". strlen("$texto"));
        echo "<br/>\n";
        $novo = rtrim($texto);
        echo($novo);
        echo "<br/>\n";
        echo("texto aplicando trim e contando novamente com strlen: ". strlen($novo));
    ?>
    <h2>função 8 - str_word_count</h2>
    <?php
        $frase = "lorem ipsum d Prometheus non";
        $cont =  str_word_count($frase, 2); // ($frase, 0) contagem; ($frase, 1) faz contagem pra cada posição do vetor ; 
        var_dump($cont);
    ?>
    <h2>função 9 - explode</h2>
    <?php
        $site = "Curso em video";
        $vetor = explode (" ", $site);
        print_r($vetor);
    ?>
    <h2>função 10 - str_split</h2>
    <?php
        $nome = "Ricardo";
        $vetor = str_split($nome);
        print_r($vetor);
    ?>
    <h2>função 11 - implode</h2>
    <?php
        $nome = array("Curso", "em", "video");
        $texto = implode("#", $nome);
        echo $texto;

    ?>
    <h2>função 12 - chr</h2>
    <?php
        $letra = chr(98);
        echo "a letra no código acima é: " . $letra;
    ?>
    <h2>função 13 - ord</h2>
    <?php
        $letra = "C";
        echo "$letra </br>";
        $cod = ord($letra);
        echo "a letra acima é o código: " . $cod;
    ?>
</body>
</html>