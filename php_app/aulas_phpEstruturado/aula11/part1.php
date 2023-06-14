<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional repetição while</title>
</head>
<body>
    <form action="index.php" method="get">
        
            <!-- // echo "<h1>condicional repetição while</h1 </br>";
            // $c = 5;

            // while ($c <= 5){
            //     echo "<input type='number' name='v1' min='0' max='100' value='0'/> <br/>";
            //     $c++;
            // } -->

            <?php 
                $i = 1; 
                while($i<=5){
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }
                    echo "$num1 $num2 $num3 $num4 $num5"; 

                $i=1; 
                while($i<=5){
                    $v = "num".$i;
                    echo "Valor $i: ". $$v ."<br/>";
                    $i++;
	            }
      	    ?>
            
        
            <input type="submit" value="enviar"/>
    </form>
</body>
</html>