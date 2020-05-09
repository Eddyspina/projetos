<!DOCTYPE html>
<html lang="pt-br">
<title>Parâmetros por Referência II</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    function &func()
    {
        $a = [1,2,3];
        print_r($a);
        
        return $a;
    }
    
    $valor = &func();
    echo "<br/>";
    print_r($valor);
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>