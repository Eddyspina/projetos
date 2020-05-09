<!DOCTYPE html>
<html lang="pt-br">
<title>Null Coalescing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
   $b = 10;
   echo $a ?? 2;
   echo "<br/>";
   echo $a ?? $b ?? 7;
   echo "<br/>";
   
   $quadrado = function($num)
   {
       return $num * $num;
   };
   $cubo = function($num) use ($quadrado)
   {
       return $quadrado($num) * $num;
   };
   $soma = function($num)
   {
       return $num + $num;
   };
   function processa_lista($lista, $func)
   {
       
       foreach($lista as &$item)
           $item = $func($item);
       return $lista;
       
   }
   
   print_r(processa_lista(range(1, 10), $soma));
   
   
   
   
   
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>