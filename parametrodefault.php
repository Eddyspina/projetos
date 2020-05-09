<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    function login($user="user", $senha="123") 
    {
    
        echo "Usuário: " . $user . "<br/>";
        echo "Senha: " . $senha . "<br/>";
        
    }
    
    login();
    
    echo "<br/>";
    
    function Login2($user2="root", $key="123")
    {
        echo "user = " . $user2 . "<br/>";
        echo "Key = " . $key. "<br/>";
        
    }
    
    login2();
    echo "<br/>";
    login2("eXcript", "123456");
    
    
    
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
     -->
</body>
</html>