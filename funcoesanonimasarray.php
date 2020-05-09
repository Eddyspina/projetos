<!DOCTYPE html>
<html lang="pt-br">
<title>Funções Anonimas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
<?php
#array_map(<f.anonima>,<array>)

$lista = [1,2,3,4,5];
$f = function($x)
{
    return $x * $x;
};
$lista_proc = array_map($f, $lista);
print_r($lista_proc);
echo "<br/>";

#array_filter(<array>, <f.anonima>)
$filtro = function($x)
{
    return $x < 5;
};
$lista_filtro = array_filter($lista, $filtro);
print_r($lista_filtro);





    
    
?>
    <!-- 
    <form method="post">
    	<input type="text" name="xxxxx" />
    	<input type="submit" value="ók" />
    </form>
     -->
</body>
</html>