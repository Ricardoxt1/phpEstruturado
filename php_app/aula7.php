<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores relacionais</title>
</head>
<body>
    <?php
        echo "<h1>operadores relacionais</h1>";

        // $num1 = 2;
        // $num2 = 4;
        // $opção = "somar";   
        
        // $seleção = ($opção == "somar") ? $num1 + $num2 : $num1 * $num2; 

        // echo $seleção;

        // $a = 3;
        // $b = "3";

        // $igualdade = ($a === $b)? "sim":"não";
        // echo $igualdade;

        // $nota1 = 9.5;
        // $nota2 = 10;
        // $m = ($nota1 + $nota2) / 2;
        // echo "media do aluno referindo a primeira nota $nota1 e a segunda $nota2 é de: $m";
        // echo "<br/>o aluno foi ". ($resultado = ($m >= 6)? "aprovado" : "reprovado"); 

        $nasc = 2009;
        $anoAtual = 2023;
        $calcNascimento = $anoAtual - $nasc;
        echo "<br/> a pessoa nascida no ano de $nasc contém: $calcNascimento anos de idade";
        echo "<br/>";
        $condi = ($calcNascimento <= 17 || $calcNascimento >= 65) ? "não é obrigado a votar": "é obrigatório realizar a votação";
        echo $condi;
    ?>
</body>
</html>