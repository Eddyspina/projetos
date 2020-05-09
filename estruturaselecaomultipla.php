<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    if(isset($_POST['numero'])){
        $num = $_POST['numero'];
    
    switch ($num){
        
        case 1:
            echo "o valor é igual a 1";
            break;
        case 2:
                echo "o valor é igual a 2";
                break;
        case 3:
                echo "o valor é igual a 3";
                break;
        default:
            echo "estrutura delfault executada";          
      }
    }
     ?>
  <form method="POST">
    	<input type="text" name="numero" />
        <input type="submit" value="informe o numero"/>
    </form>
   
</body>
</html>