<!DOCTYPE html>
<html lang="pt-br">
<title>Funções e Escopo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    $total = 0;
    
    function funcEstudo()
    {
        $valor1 = 10;
        $valor2 = 16;
        global $total;
        $total = $valor1 + $valor2;
        return $total;
    }
     echo funcEstudo();
     echo "<br/>";
    
    echo $total;
    echo "<br/>";
    
    
    $testando = 10;
    $a = 10;
    $b = 5;
    
    function estudoEscopo()
    {
        
        echo $GLOBALS["testando"];
        echo "<br/>";
        echo $GLOBALS["a"];
        echo "<br/>";
        echo $GLOBALS["b"];
        
        
    }
    estudoEscopo();
    echo "<br/>";
    print_r($GLOBALS);
    echo "<br/>";
    
    
    $y = 'Fala';
    $z = 'Num fala';
    
    function funcaoX()
    {
        global $y;
        $y.= ' cuicaiada!!!!!!!!!!!!!!!!';
        echo $y;
        echo "<br/>";
        echo $GLOBALS["z"].= ' cuicaiada!!!!!!!!!!!!!!!!';
        echo "<br/>";
    }
    
    funcaoX();
    
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>