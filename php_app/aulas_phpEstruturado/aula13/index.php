<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício for (primo)</title>
</head>
<body>
    <form action="index.php" method="get">
        <!-- numero: <input type="number" name="num" min="1" max="50"/> -->
        numero: <select name="num">
            <?php
                $impar = $i % 3 == 1;
                
                for ($i = 1; $i <=20; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }

                if ($impar) {
                    echo "este número é primo";
                } else {
                    echo "digite outro valor";
                }
            ?>
        
        <!-- dar opção de valores ao usuario
            realizar uma lógica para declarar o número sendo impar  -->
            
        </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>