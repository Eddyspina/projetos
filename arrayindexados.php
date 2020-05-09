<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
    //$cores = array("Azul", "Amarelo", "Verde", "Branco");
    $cores = ["Azul", "Amarelo", "Verde", "Branco"];
    
    print_r($cores);
    
    echo "<br/>";
    echo "<br/>";
    
    
    $cores[0] = "Azul";
    $cores[1] = "Amarelo";
    $cores[2] = "Verde";
    $cores[3] = "Branco";
    
    print_r($cores);
    echo "<br/>";
    echo "<br/>";
    
    
    $cores[] = "Azul1";
    $cores[] = "Amarelo1";
    $cores[] = "Verde1";
    $cores[] = "Branco1";
    
    print_r($cores);
    echo "<br/>";
    echo "<br/>";
    
    $cores2[10] = "Azul";
    $cores2[11] = "Amarelo";
    $cores2[12] = "Verde";
    $cores2[13] = "Branco";
    
    print_r($cores2);
    
    echo "<br/>";
    echo "<br/>";
    
    $cores3[] = "Azul";
    $cores3[] = "Amarelo";
    $cores3[] = "Verde";
    $cores3[] = "Branco";
    
    print_r($cores3);
    
    echo "<br/>";
    echo "<br/>";
    
    $cores4 = ["Azul", "Amarelo", "Verde", "Branco"];
    
    print_r($cores4);
    
    echo "<br/>";
    echo "<br/>";  
   
    
    ?>
    <!--  
    <form method="post">
    	input type="text" name="xxxxx" />
    	<input type="submit" value="ok" />
    </form>
    -->
</body>
</html>