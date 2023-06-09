<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções para se usar em vetores</title>
</head>

<body>
    <?php
    $arr = array(2, 5, 6, 8, 2);
    array_push($arr, "4 <-");
    array_pop($arr);

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }
    ?>

    <h2>realização inserção unshift</h2>

    <?php
    $arr = array(2, 5, 6, 8, 2);
    array_unshift($arr, "3 <-");
    array_shift($arr);

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }
    ?>

    <h2>realização sort</h2>

    <?php
    $arr = array(2, 5, 6, 8, 2);
    array_unshift($arr, 3);
    sort($arr);
    echo "ordem padrão -> sort </br>";

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }
    echo "</br>";

    $arr = array(2, 5, 6, 8, 2);
    array_unshift($arr, 3);
    rsort($arr);
    echo "ordem inversa -> rsort </br>";

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }

    echo "</br>";

    $arr = array(2, 5, 6, 8, 2);
    array_unshift($arr, 3);
    asort($arr);
    echo "ordem inversa -> asort </br>";

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }

    echo "</br>";

    $arr = array(2, 5, 6, 8, 2);
    array_unshift($arr, 3);
    ksort($arr);
    echo "ordem inversa -> ksort </br>";

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }

    echo "</br>";

    $arr = array(2, 5, 6, 8, 2);
    array_unshift($arr, 3);
    krsort($arr);
    echo "ordem inversa -> krsort </br>";

    foreach ($arr as $indice => $value) {
        echo "o valor do indice $indice: $value </br>";
    }
    ?>
    
    

    

</body>

</html>