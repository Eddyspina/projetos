<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    $varvar = "teste";
    $$varvar = 50;
    echo $varvar . "<br/>";
    echo $$varvar . "<br/>";
    echo $teste . "<br/>";
    
    echo  "<br/>";
    echo  "<br/>";
    
    define("TESTE", 10);
    for($x=0; $x<=5; $x++)
        define("C".$x, $x);
        echo TESTE .  "<br/>";
        echo C0 .  "<br/>";
        echo C1 .  "<br/>";
        echo C2 .  "<br/>";
        echo C3 .  "<br/>";
        echo C4 .  "<br/>";
        echo C5 .  "<br/>";
        
        echo "<br/>";
        echo "<br/>";
        
        const VALOR = 1090;
        echo VALOR;
        
        
    
    
    ?>
    
</body>
</html>