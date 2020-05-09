<!DOCTYPE html>
<html lang="pt-br">
<title>Parâmetros por Referência</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    $a = [1,2,3];
    $b = $a;
    $a[1] = 5;
    
    print_r($a);
    echo "<br/>";
    print_r($b);
    echo "<br/>";
    
    $a1 = [1,2,3];
    $b1 = &$a1;    
    $a1[1] = 5;
    
    print_r($a1);
    echo "<br/>";
    print_r($b1);
    
    
    
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>