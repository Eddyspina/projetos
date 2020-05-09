<!DOCTYPE html>
<html lang="pt-br">
<title>Funções Anonimas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
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
    
    function processa_lista ($lista, $func)
    {
        foreach($lista as &$item)
            $item = $func($item);
            return $lista;
    }
    
    print_r(processa_lista(range(1,10), $soma));
    echo "<br/>";
    
    #array array_map(callback $callback, array $arr1);
    $arr = [1,2,3,4,5];
    
    $f = function($x)
    {
        return $x * $x;     
        
    };
    
    $var_arr = array_map($f, $arr);
    var_dump($var_arr);
    echo "<br/>";
    
    //$lista = [1,2,3,4,5,6,7,8,9,10];
    $lista = [1,2.21,"",9,4];
    
    $f = function($v)
    {
        return is_int($v);
    };
    $lista_filtrada = array_filter($lista, $f);
    
    print_r($lista_filtrada);
    echo "<br/>";
    
    $quadrado = function($item)
    {
        return $item * $item;
    };
    $cubo = function($item) use ($quadrado)
    {
        return $quadrado($item) * $item;
    };
    $soma = function($item)
    {
        return $item + $item;
    };
    
    function processa_lista1($lista, $func)
    {
        foreach($lista as &$item){
            $item = $func($item);
            }
            return $lista;
    }
    echo "Quadrado";
    echo "<br/>";
    print_r(processa_lista1(range(1,10), $quadrado));
    echo "<br/>";
    echo "Soma";
    echo "<br/>";
    print_r(processa_lista1(range(1,10), $soma));
    echo "<br/>";
    echo "Cubo";
    echo "<br/>";
    print_r(processa_lista1(range(1,10), $cubo));
    echo "<br/>";    
    echo "Lista negativa";
    echo "<br/>";
    print_r(processa_lista1(range(1,10), function($item)
    {
        return $item -10;
    }
    ));      
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>