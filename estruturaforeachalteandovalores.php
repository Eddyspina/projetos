<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    $nums = range(0, 10);
    print_r($nums). "<br/>";
    
    foreach($nums as $chave => &$valor){
        $valor *= 10;
        echo $valor . "<br/>";
    }
    print_r($nums);
    ?>
    <!--
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
    -->
</body>
</html>