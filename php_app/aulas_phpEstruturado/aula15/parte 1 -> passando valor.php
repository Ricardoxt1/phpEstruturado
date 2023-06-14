<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotina parte 2 -> passando valor</title>
</head>
<body>
    <?php
        // function teste ($x){
        //     $x = $x + 2;
        //     echo "$x</br>";
        // }

        function teste (&$x){
            $x = $x + 2;
            echo "$x</br>";
        }

        $a = 3;
        teste($a);
        echo $a;
    ?>

</body>
</html>