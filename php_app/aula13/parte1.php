<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional for</title>
</head>
<body>
    <form action="index.html" method="get">
        <select name="num">
            <?php

                for($i=1; $i <= 10; $i++){
                    echo "<option value=\"$i\">$i</option>";
                }

                // for($i=1; $i<=10; $i++){
                //     echo "$i </br>";
                // }
                
                // for($i=10; $i>=1; $i--){
                //     echo "$i </br>";
                // }

                // echo "</br>";

                // for($l=80; $l>=0; $l -= 5){
                //     echo "$l </br>";
                //  }

            ?>
        </select>
        <input type="submit" value="Tabuada"/> 
        </br>
        <?php
            $n = $_GET["num"] ? $_GET["num"] : 1;
            for ($c=1; $c <= 10; $c++){
                $r = $n * $c;
                echo "$n x $c = $r </br>";
            }
        ?>
    </form>
        
</body>
</html>