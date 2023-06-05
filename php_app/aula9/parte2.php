<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $cor = "#FF0000";
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média por condição</title>
    <style>
        span.texto {
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
        
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $média = ($nota1 + $nota2) / 2;
        
        echo "a nota primária: $nota1";
        echo "<br/> nota secundária: $nota2";

        if ($média >= 5 && $média <= 6){
            echo "<br/> média entre nota primária e secundária: $média";
            echo "<br/> aluno <span class='texto'>RECUPERAÇÃO!</span>";
        } elseif ($média >= 7 ){
            echo "<br/> média entre nota primária e secundária: $média";
            echo "<br/> aluno <span class='texto'>APROVADO!</span>";  
        } else {
            echo "<br/> média entre nota primária e secundária: $média";
            echo "<br/> aluno <span class='texto'>REPROVADO!</span>";
        }
    ?>
    
    <a href="index.html">voltar</a>
</body>
</html>