<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional repetição while</title>
</head>
<body>
    <?php
        $n1 = $_GET["op1"] ? $_GET["op1"] : null; 
       
        $n2 = $_GET["op2"] ? $_GET["op2"]: null;
        
        $incremento = $_GET["incremento"];

        
        if ($n1 > $n2){
            while ($n1){
                $n1 += $incremento;
            }
        }
      
        echo $n1;
        echo $n2;
    ?>
    <a href="index.html">voltar</a>
</body>
</html>