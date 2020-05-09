<!DOCTYPE html>
<html lang="pt-br">
<title>Funções Anonimas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    $func = function($num)
    {
        echo "Valor do parâmentro recebido " . $num;
    };
    
    $func(10);
    echo "<br/>";
    
    
    
    $func1 = function($nome)
    {
        echo "O nome enviado como parâmentro é: $nome";
    };
    
    function teste($f)
    {
        $f("Claudio");
    }
    
    teste($func1);
    echo "<br/>";
    $func("Éddy Spina");
    echo "<br/>";
    $func1("Éddy Spina");
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>