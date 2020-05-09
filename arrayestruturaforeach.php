<!DOCTYPE html>
<html lang="pt-br">
<title>Arrys foreach</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
</body>
    <?php
    $lista = array('par', 'impar', 'par', 'impar', 'par', 'impar', 'par', 'impar', 'par', 'impar', 'par');
    foreach( range(0, 10, 2) as $numero) {
        print "$numero = $lista[$numero]  <br/>";
    }
    
    $arr = range(1, 10);
    foreach($arr as $valor){
        echo "$valor <br/>";
    }
    
    $arr1 = array(1, 2, 3, 17);
    $i = 0;
    foreach ($arr1 as $valor){
        echo "$arr1[$i] => $valor <br/>";
        $i++;
    }
    
    $lista1 = array("um" => 1 , "dois" => 2, "tres" => 3, "quatro" => 4);
    
    foreach ($lista1 as $chave => $valor1){
        echo "\$lista1[$chave] => $valor1 <br/>";
    }
    
    $lista2 = array();
    $lista2[0][0] = "a";
    $lista2[0][1] = "b";
    $lista2[1][0] = "c";
    $lista2[1][1] = "d";
    foreach ($lista2 as $val1){
        foreach ($val1 as $val2){
        echo "$val2 <br/>";
        
        }
    }
  
    foreach ([1, 2, 3, 4, 5] as $valor2){
        echo "$valor2 <br/>";
    }
    
    $lista3 = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    foreach($lista3 as $item){
        echo "$item <br/>"; 
    }
    
    
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
     -->
</body>
</html>