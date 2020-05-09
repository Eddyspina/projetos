<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Operadores realcioais 1 e 2</title>
</head>
</body>
    <?php
    /* 
          * 1) apresentar slides
          * 2) estudar algumas condições
          */
    
   
   echo "igualdade" . "<pre>";   
   var_dump( 10 == 10) . "<pre>";   
   var_dump( 10 == 10) . "<pre>"; 
   echo "\n";
   echo "igualdade/não igauldade" . "<pre>";
   var_dump( 10 == 10) . "<pre>";
   var_dump( 10 == 11) . "<pre>";
   echo "\n";
   echo "diferente" . "<pre>";
   var_dump( 10 != 10) . "<pre>";
   var_dump( 10 != 11) . "<pre>";
   echo "\n";
   
   echo "diferente" . "<pre>";
   var_dump( 10 <> 10) . "<pre>";
   var_dump( 10 <> 11) . "<pre>";
   echo "\n";
   
   echo "identico" . "<pre>";
   var_dump( 10 === 10) . "<pre>";
   var_dump( 10 === 11) . "<pre>";
   echo "\n";
  
   echo "não identico" . "<pre>";
   var_dump( 10 !== 10) . "<pre>";
   var_dump( 10 !== 11) . "<pre>";
   echo "\n";
   
   echo "menor" . "<pre>";
   var_dump( 7 < 8) . "<pre>";
   var_dump( 7 > 8) . "<pre>";
   echo "\n";
   
   echo "menor ou igual" . "<pre>";
   var_dump( 7 <= 7) . "<pre>";
   var_dump( 7 <= 6) . "<pre>";
   var_dump( 3 <= 7) . "<pre>";
   echo "\n";
   
   echo "maior ou igual" . "<pre>";
   var_dump( 7 >= 7) . "<pre>";
   var_dump( 7 >= 8) . "<pre>";
   var_dump( 10 >= 7) . "<pre>";
   echo "\n";
     
   
   
    ?>
    
</body>
</html>


