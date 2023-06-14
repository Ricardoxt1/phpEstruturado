<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condição switch</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset ($_GET ["oper"]) ? $_GET["oper"] : 1;

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);
                
                
        } 
        echo "resultado da solicitação solicitada é: $r";
        
    ?>
    <a href="index.html">voltar</a>
</body>
</html>