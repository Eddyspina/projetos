<!DOCTYPE html>
<html lang="pt-br">
<title>Operador Space Shit</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    echo 1 <=> 1;
    echo "<br/>";
    echo 2 <=> 1;
    echo "<br/>";
    echo 1 <=> 2;
    echo "<br/>";
    echo [] <=> [];
    echo "<br/>";
    echo [1,2,3] <=> [1,2,3];
    echo "<br/>";
    echo [1,2,3] <=> [];
    echo "<br/>";
    echo [1,2,3] <=> [1,2,1];
    echo "<br/>";
    echo [1,2,3] <=> [1,2,4];
    echo "<br/>";
    echo "x" <=> "x";
    echo "<br/>";
    echo "x" <=> "y";
    echo "<br/>";
    echo "y" <=> "x";
    echo "<br/>";
    
    foreach(range(0,9) as $v)
    {
        
        $x = rand(0, 9);
        $rel = $v <=> $x;
        echo "v=$v <=> x=$x é $rel <br/>";
                
    }
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>