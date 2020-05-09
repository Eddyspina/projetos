<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    #VERIFICA SE A ESTRUTURA É UM ARRAY
    
    echo "Função: is_array() - ". "<br/>";
    echo "Valor = [] - ". is_array( [] ) . "<br/>";
    echo "Valor = array() - ". is_array( array() ). "<br/>";
    echo "Valor = [1,2,3] - ". is_array( [1,2,3]). "<br/>";
    echo "Valor = 1 - ". is_array( 1 ). "<br/>";
    
    #RETORNA A QUANTIDADE DE ELEMENTOS
    echo "Função: count()". "<br/>";
    echo "Valor = [1,2,3,4] - ". count( [1,2,3,4] ). "<br/>";
    echo "Valor = range(0,1000) - ". count( range(0,1000)). "<br/>";
    
    #VERIFICA SE UM ELEMENTO ESTÁ CONTIDO
    echo "Função: in_array(valor, array)". "<br/>";
    echo "Valor = in_array(2, [1,2,3,4,5] ". in_array(2, [1,2,3,4,5]). "<br/>";
    echo "Valor = in_array(6, [1,2,3,4,5] ". in_array(6, [1,2,3,4,5]). "<br/>";
    
    #ORDENAÇÃO
    echo "Função: sort() <br/>";
    $arr = ["c", "b", "a", "f"];
    sort($arr);
    print_r($arr);
    echo "<br/>";
    
    #INVERSÃO
    echo "Função: array_reverse ". "<br/>";
    $arr1 = [1,2,3,4];
    $arr1 = array_reverse($arr1);
    print_r($arr1);
    echo "<br/>";
    
    #SOMA
    echo "Função: array_sum()". "<br/>";
    $arr3 = [1,2,3,4];
    echo "A soma é: ", array_sum($arr3). "<br/>";
    
    #JUNÇÃO DE ARRAYS
    echo "Função: array_merge()". "<br/>";
    $arra = [1,2];
    $arrb = ["a", "b"];
    $arrab = array_merge($arra, $arrb);
    print_r($arrab);
    
    
    
    
    
    
    






    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
     -->
</body>
</html>