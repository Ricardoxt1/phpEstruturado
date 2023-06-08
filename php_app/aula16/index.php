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
</body>
</html>