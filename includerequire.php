<!DOCTYPE html>
<html lang="pt-br">
<title>Include e Require</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    
    #include('conexaoII.php');
    #include_once('conexaoII.php');
    
    require('conexaoII.php');
    require_once ('conexaoII.php');
    
    echo $teste;
    echo "<br/>";
    $teste = 5;
    
    #require('conexaoII.php');
    #include('conexaoII.php');
    echo $teste;
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>