<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
</body>
    <?php
   // $txt = isset($_GET["texto1"]) ? $_GET["texto1"] : "a chave n�o existe";
    // http://localhost/Projeto/Etapa1/operacaoternariaII.php?texto1=chave1&texto2=chave2
    
    if(isset($_GET["texto1"])){
        $txt =  $_GET["texto1"];
    }else{
        $txt = "a chave n�o existe";
    }
    
    echo $txt;
    
    echo "<br/>";
    
    if(isset($_GET["texto2"])){    
    $txta =  $_GET["texto2"];
}else{
    $txta = "a chave2 n�o existe";
}

echo $txta;

    
    
    ?>
  
</body>
</html>