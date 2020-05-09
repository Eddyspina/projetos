<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title>Estrutura dê elseif</title>
</head>
</body>
    <?php
        if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
        if($idade < 18){
            echo "A idade é de uma criança ou de um adolescente";
        }elseif($idade >= 18 and $idade < 60){
            echo "A idade é de um adulto";
        }else{
            echo "A idade é de uma pessoa de terceira idade";
        }
        }
    ?>
    <form method="POST">
    	<input type="text" name="idade" />
        <input type="submit" value="informe a idade"/>
    </form>
</body>
</html>