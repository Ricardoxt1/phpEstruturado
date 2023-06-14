<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional switch</title>
</head>
<body>
        <?php
            $o = $_GET ["op"] ? $_GET["op"] : "selecione uma região";

            switch ($o) {
                case 7:
                case 8:
                    $r = "final de semana, não terá aula.";
                    break;
                case 2:
                case 3:
                case 4:
                case 5;
                case 6:
                    $r = "vai ter que ir pra aula, garotão";
                    break;
                default: 
                echo "opção inválida, amigo.<br/>";
                break;
            }
            echo $r;
        ?>
        <a href="javascript:history.go(-1)">voltar</a>
</body>
</html>