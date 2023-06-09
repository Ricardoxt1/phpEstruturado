<!-- aula 05 - operadores aritméticos -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritméticos</title>
</head>
<body>
    <?php
        echo "<h1>operadores aritméticos</h1>";
        $n1 = 5;
        $n2 = 3;
        $n3 = 2500.98;
        $s = $n1 + $n2;
        $m = $n1 * $n2;
        $d = $n1 / $n2;
        $sub = $n1 - $n2;
        $r = $n1 % $n2;
        $media = ($n1 + $n2) / 2;

        echo "a soma de $n1 e $n2 é igual a ". $s ;

        echo "<br/>a multiplicação de $n1 e $n2 é igual a ". $m;

        echo "<br/>a divisão de $n1 e $n2 é igual a ". round($d);

        echo "<br/>a subtração de $n1 e $n2 é igual a ". $sub;

        echo "<br/>o resto de $n1 e $n2 é igual a ". $r;

        echo "<br/>a media de $n1 e $n2 é igual a ". $media;

        // funcões matemática 

        echo "<h1>funções matemática</h1>";

        echo "<br/>o valor absoluto de $n1 é ". abs($n1);

        echo "<br/>o valor elevado de $n1<sup>$n2</sup> será ". pow($n1, $n2);

        echo "<br/>a divisão de $n1 e $n2 é igual a ". round($d);

        echo "<br/>conversão do valor real para inteiro de $n3". intval($n3);   

        echo "<br/>formação dos números personalizada R$ ". number_format($n3,2,",",".");
    ?>
</body>
</html>