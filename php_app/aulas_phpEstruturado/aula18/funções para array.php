<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetores e matrizes - PHP</title>
</head>
<body>
    <!-- funções para array -->
    <pre>
        <h2>estrutura simples</h2>
        <?php
            $arr = array(2,5,7,8,3);
            $arr [] = 9;
            print_r($arr);
        ?>
        <h2>vetor por range</h2>
        <?php
            $ra = range(2,20,2);
            print_r($ra);
        ?>
        <h2>estrutura de exibição com foreach</h2>
        <table border="2"><tr> 
        <?php
            $arr = array(2,5,7,8,5,7);
            foreach ($arr as $i){
                echo "<td>$i";
            }
        ?> 
        </table>
        <h2>chaves personalizada</h2>
        <?php
            $v = array (
                            1 => "a",
                            2 => "b",
                            5 => "e",
                            8 => "h"
            );
            $v[]= "t";
            unset($v[2]);
            print_r ($v);
        ?>
        <h2>chaves associativas</h2>
        <?php
            $cad = array ("nome" => "Ricardo",
                          "idade" => 23,
                          "peso" => 63.2);
            print_r ($cad);
        ?>
        <br>
        <?php
            $cad = array ("nome" => "Ricardo",
                          "idade" => 23,
                          "peso" => 63.2);
            $cad["hobbie"] = "basquete";
            print_r ($cad);
        ?>
        <p><b>foreach com as chaves associadas</b></p>
        <?php
            $cad = array ("nome" => "Ricardo",
                          "idade" => 23,
                          "peso" => 63.2);
            $cad["hobbie"] = "basquete";
            foreach($cad as $key => $value){
                echo "o campo $key representa o valor $value</br>";
            }
        ?>
        <h2>matrizes -> vetores dentro de vetores</h2>
        <?php
            $m = array (array (2,3),
                        array (4,6),
                        array (8,10)            );
            print_r ($m);

            $m [0][1] = $m [2][1];

            print_r ($m);
        ?>
    </pre>
</body>
</html>