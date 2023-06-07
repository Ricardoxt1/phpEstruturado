<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php
        // function soma($a, $b){
        //     $s = $a + $b;
        //     echo "soma vale $s";
        // }

        function soma(){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;
            for ($i = 0; $i <= $tot; $i++){
                $s = $s + $p[$i];
            }
            return $s;
        }

        $res = soma(3,4,8,1,2);
    ?>
</body>
</html>