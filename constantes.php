<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Constantes</title>
<head>
</head>
<body>
    <?php
    echo __LINE__ . PHP_EOL;
    echo "<br/>";
    echo __FILE__ . PHP_EOL;
    echo "<br/>";
    echo __DIR__ . PHP_EOL;
    echo "<br/>";
    echo __FUNCTION__ . PHP_EOL;
    echo "<br/>";
    echo __CLASS__ . PHP_EOL;
    echo "<br/>";
    echo __METHOD__ . PHP_EOL;
    echo "<br/>";
    echo __NAMESPACE__ . PHP_EOL;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    
    define("TESTANDO", 10);
    echo TESTANDO . "<br/>";
    echo "<br/>";
    
    for($x=0; $x<5; $x++)
        define("CONSTANTE". $x, $x);
    
        echo CONSTANTE4 . "<br/>";
        echo CONSTANTE1 . "<br/>";
        
        echo "<br/>";
        echo "<br/>";
        
    const VALOR = 1000;
    echo  VALOR . "<br/>";
  
        
    
    
    
   
    
    
    
    
    
    
    
    ?>
    
</body>
</html>