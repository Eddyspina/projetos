<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    $arr = [1,2,3];
    $arr[] = 4;
    
    print_r($arr) . "<br/>";
    echo "<br/>";
    
    $cores[2] = "Preto";
    $cores[0] = "Branco";
    $cores[1] = "Azul";
    
    print_r($cores) . "<br/>";
    
    echo "<br/>";
    echo "as cores são:  $cores[0],  $cores[2] e $cores[1]";
    
    echo "<br/>";
    
    $arr = ["aaa", "bbb", "ccc"];
    unset($arr[1]);
    print_r($arr); 
    
    echo "<br/>";
    
    $arr1 = ["zero", "um", "dois", "tres", "quatro"];
    print_r($arr1);
    
    echo "<br/>";
    
    
    $arr1[] = "cinco";
    print_r($arr1);
     
    echo "<br/>";
    
    unset($arr1[3]);
    print_r($arr1);
    
    echo "<br/>";
    $lista = ["zero", "um", "dois", "tres", "quatro"];
    $lista[] = "cinco";
    print_r($lista);
    echo "<br/>";
    
    $lista[1] = "ummm";
    $lista[4] = "quatrro";
 
    print_r($lista);
    echo "<br/>";
    
    unset($lista[3]);
    print_r($lista);
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