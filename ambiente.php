<!DOCTYPE html>
<html lang="pt-br">
<title>Ambiente</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	
</head>
<body>
    <?php
    
    if(isset($_POST['valor1'])){
       echo $_POST['valor1'];
    }
    ?>
    <form method="post">
    	<input type="text" name="valor1" />
    	<input type="submit" />
    </form>
</body>
</html>