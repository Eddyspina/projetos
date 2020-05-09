<!DOCTYPE html>
<html lang="pt-br">
<title>String de aspas duplas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
    <?php
    $num = 55;
    echo "o valor da variavel num é: " . $num."<br/>";
    
    $arr = ["Preto", "Azul", "Amarelo"];
    echo "A cor da bola é: $arr[0]  <br/>";
    echo "A cor da bola é: $arr[1]  <br/>";
    echo "A cor da bola é: $arr[2]  <br/>";
    
    $a = 10;
    $$a = 50;
       
    echo "o valor de é: $a e o valor de aa é: $a <br/>";
    echo "o valor de a é: $a e o valor de aa é: ${$a} <br/>";
    
    ${$arr[2]} = 'Marrom';
    echo "Var: $arr[2], ${$arr[2]}";
    
    
    
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>