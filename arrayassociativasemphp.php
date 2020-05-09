<!DOCTYPE html>
<html lang="pt-br">
<title>array associtivas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<head>
</head>
</body>
    <?php
    $pontos = array("Zé"=>"11", "José"=>"4", "Zéca"=>"22");
    print_r($pontos);
    echo "<br/>";
    echo "Pontos do Zé: ".$pontos["Zé"]. "<br/>";
    echo "Pontos do José: ".$pontos["José"]. "<br/>";
    echo "Pontos do Zéca: ".$pontos["Zéca"]. "<br/>";
    $pontos["Zéca"] += 1;
    echo "Pontos do Zéca(somado) : " .$pontos["Zéca"];
    echo "<br/>";
    
    $pontos1 = array("url"=>"excript.com/", 404=>"excrpit.com/error", 301=>"excript.com/error301/",);
    print_r($pontos1);
    echo "<br/>";
    
    
    
    ?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="�k" />
    </form>
     -->
</body>
</html>