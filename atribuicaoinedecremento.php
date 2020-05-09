<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    $x = 0;
    $x1 = 0;
    $x2 = 0;
    $x3 = 0;
    $num = 10;
    
    
    echo $x . "\n";
    echo ++$x . "\n";
    echo "<br/>";
    echo $x1 . "\n";
    echo --$x1 . "\n";
    echo "<br/>";
    echo $x2 . "\n";
    echo $x2++ . "\n";
    echo $x2 . "\n";
    echo "<br/>";
    echo $x3 . "\n";
    echo $x3-- . "\n";
    echo $x3 . "\n";
    echo "<br/>";
    while($num > 0){
        $num -=1;
        echo $num . "\n";
    }
    
    ?>
 
</body>
</html>