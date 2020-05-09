<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    
    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    for ($x=0; $x<count($lista); $x++){
        echo $lista[$x] . "<br/>";
    }
    
    echo "<br/>";
    
    $arr = ["aaa", "bbb", "ccc"];
    echo count($arr);
    echo "<br/>";
    
    $lista1 = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    $qnt = count($lista1);
    echo $qnt . "<br/>";
    echo "<br/>";
    
    
    for ($x=0; $x<$qnt; $x++){
        echo "$x: $lista[$x] <br/>";
    }
    
    echo "<br/>";
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
    -->
</body>
</html>