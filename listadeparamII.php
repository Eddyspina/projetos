<!DOCTYPE html>
<html lang="pt-br">
<title>Lista de parâmetros II</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
     function somaTudos() 
     {
     $lista = func_get_args();
     $qntd = func_num_args();
     $total = 0;
     //for($x = 0; $x<$qntd; $x++)
     foreach ($lista as $item)
     {
         $total += $item;
     }
         echo "A soma de todos os parâmetros é: " . $total;
     }
    
     somaTudos(1, 2, 3, 4, 5, 6);
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>