<!DOCTYPE html>
<html lang="pt-br">
<title>início</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    function soma()
    {
        $a = func_get_arg(0);
        $b = func_get_arg(1);
        
        $x = $a + $b;
        echo "A soma dos par�metros �: " . $x;
        
    }
    
    soma(1, 2);
    echo "<br/>";
    
    function soma1()
    {
        $num = func_num_args();
        $args = func_get_args();
        #imprime os par�metros enviados
        $a = func_get_arg();
        foreach ($a as $v)
        {
            echo $v;
        }
        #soma dos par�metros enivados
        $total = 0;
        for ($i = 0; $i <$num; $i++)
            $total += $args[$i];
            echo "A Soma dos par�metros �: " . $total;
            soma1(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    }
    
    
    
    function soma3()
    {
        
        $total = func_get_arg(0) + func_get_arg(1);
        echo "A soma dos par�metros �: " . $total;
        
    }
    soma3(0.666, 2.555555);
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>