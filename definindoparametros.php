<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<head>
	
</head>
<body>
    <?php
    function soma($a, $b)
    {
        $x = $a + $b;
        echo "A soma doas parametros é: " . $x;
    }
    
    soma(10, 20);
    echo "<br/>";
    
    function soma2($num1, $num2)
    {
        $total = $num1 + $num2;
        
        echo "A segunda soma é: ".  $total. "<br/>";
        
    }
    
    soma2(1000, 29292);
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
     -->
</body>
</html>