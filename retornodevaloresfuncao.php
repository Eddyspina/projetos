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
        $num = func_num_args();
        $args = func_get_args();
        
        $total = 0;
        for ($i = 0; $i < $num; $i++)
            $total += $args[$i];
        return $total;
        
    }
    
    echo soma(1,2,3,4,5,6,7,8,9,10);
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>