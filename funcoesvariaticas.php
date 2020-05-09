<!DOCTYPE html>
<html lang="pt-br">
<title>Funções Variáticas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
        
    function cubo($num)
    {
        
    $x = ($num * $num * $num);
    
    return $x;
        
        
    }
    echo cubo(9);
    echo "<br/>";
    
    
    function media(...$valores)
    {
        $total = array_sum($valores); 
        $total =$total / count($valores);
        return $total;
    }
    
    echo media(5,5,6);
    
    ?>
     <!-- 
    <form method="post">
    	<input type="text" name="cubo" />
    	<input type="submit" value="OK" />
    </form>
     -->
</body>
</html>