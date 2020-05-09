<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tela de Login</title>
</head>
</body>
    <?php
    $login = "Eddy";
    $senha = "12345";
    
    if(isset($_POST["login"])){
        if($_POST["login"] == $login and $_POST["senha"] == $senha){
            echo "Login efetuado com sucesso";
        }else{
            echo "Login ou senha invalido";
              }
    }
    ?>
    <form method="post">
    	<input type="text" name="login"><br>
    	<input type="password" name="senha">
    	<input type="submit" value="Acesse">
    </form>
</body>
</html>