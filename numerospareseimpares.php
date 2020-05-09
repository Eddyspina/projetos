<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Números Pares e Impares</title>
</head>
<body>
	<?php
	if(isset($_POST["num"])){
		echo $_POST["num"];
        echo "<br>";
        $num = $_POST["num"];

        if($num % 2 == 0){
            echo "O numero informado é par";
        }else{
            echo "O numero informado é impar";
        }
	}
    ?>
    <form method="POST">
    	<input type="text" name="num" />
    	<input type="submit" />
    </form>
</body>
</html>