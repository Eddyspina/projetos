<!DOCTYPE html>
<html lang="pt-br">
<title>início</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    $x = 9;
    $func = function() use ($x) 
    {
        echo "O Valor de x é: $x";
    };
    
    $func();
    echo "<br/>";
    
    $a = 10;
    $b = 10;
    $func = function() use ($a, &$b)
    {
        echo "O valor de a é: $a";
        echo "<br/>";
        echo "O valor de b é: $b";
        $a = 0;
        $b = 0;
    };

    $func();
    echo "<br/>";
    echo "---------------------------";
    echo "<br/>";
    echo "O valor de a é: $a";
    echo "<br/>";
    echo "O valor de b é: $b";
    echo "<br/>";
    echo "---------------------------";
    echo "<br/>";
    
    $var1 = 10;
    $num = ["um", "dois", "três"];
    $func = function() use ($var1, &$num)
    {
        echo "Variavel externa $var1";
        echo "<br/>";
        print_r($num);
        echo "<br/>";
        echo "---------------------------";
        echo "<br/>";
        
    };
    
    $func();
    $num1 = 100;
    $num2 = 100;
    
    $func = function() use(&$num1, $num2)
    {
        echo "Anomima: " . $num1;
        echo "<br/>";
        $num1 = 1500;
    };
    
    $func();
    echo "<br/>";
    echo $num1;
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>