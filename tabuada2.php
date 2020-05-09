<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tabuada é em PHP</title>
</head>
</body>
    <?php
    $tab = 0;
    if (isset($_POST["edTABUADA"])){
        $tab = $_POST["edTABUADA"];
        iF(!is_numeric($tab)){
            echo "<br/> O valor informado nâo é um número.<br/>";
        }else{
            for($num=1; $num<=10; $num++){
                echo $num . " x " .  $tab . " = " . ($num * $tab) . "<br/>";
            }
     
        }
    }
    
    ?>
    <form method="post">
    	<input type="text" name="edTABUADA" />
    	<input type="submit" value="Digite a número desejado" />
    </form>
</body>
</html>