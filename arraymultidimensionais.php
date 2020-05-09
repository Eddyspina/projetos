<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    $jogo = array(
        array(1, "Zé", 11),
        array(2, "José", 4),
        array(3, "Zéca", 22),
    );
   
    print_r($jogo);
    echo "<br/>";
    for ($linha=0; $linha<3; $linha++) {
        for ($coluna=0; $coluna<3; $coluna++){
            echo $jogo[$linha][$coluna]. "  ";
        }
        echo "<br/>";
    }
    
    echo "<br/>";
    
    $x =[
            "array1" => [
                "aaa"=>100,
                "bbb"=>200,
                "ccc"=>300               
            ],
            "array2" => [
            "ddd"=>500,
            "eee"=>600,
            "fff"=>700
            ]       
    ];   
    echo $x["array1"]["aaa"];
    echo "<br/>";
    echo $x["array1"]["bbb"];
    echo "<br/>";
    echo $x["array1"]["ccc"];
    echo "<br/>";
    echo $x["array2"]["ddd"];
    echo "<br/>";
    echo $x["array2"]["eee"];
    echo "<br/>";
    echo $x["array2"]["fff"];
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