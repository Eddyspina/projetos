<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
   # | ID | NOME | PONTOS |
   # | 1  | Zé   | 11     |
   # | 2  | José | 4      |
   # | 3  | Zéca | 22     |
    
    
    
    
    $jogo = [
                ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
                ["ID"=>2, "NOME"=>"José", "PONTOS"=>4],
                ["ID"=>3, "NOME"=>"Zéca", "PONTOS"=>22],
            ];
    

    echo "<br/>";
    echo $jogo[0]["ID"]. " ";
    echo $jogo[0]["NOME"]. " ";
    ECHO $jogo[0]["PONTOS"];
    echo "<br/>";
    echo $jogo[1]["ID"]. " ";
    echo $jogo[1]["NOME"]. " ";
    ECHO $jogo[1]["PONTOS"];
    echo "<br/>";
    echo $jogo[2]["ID"]. " ";
    echo $jogo[2]["NOME"]. " ";
    ECHO $jogo[2]["PONTOS"];
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