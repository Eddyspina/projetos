<!DOCTYPE html>
<html lang="pt-br">
<title>String inicio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    $str = "abc";
    echo $str . " - 123";
    echo "<br/>";
    echo $str[2];
    echo "<br/>";
    echo $str{0};
    echo "<br/>";
    echo "<br/>";
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++)
    {
        echo $str[$i];
        echo "<br/>";
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