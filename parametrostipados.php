<?php
    declare(strict_types=1);
    
    #FUNÇÕES COM PARAMENTROS TIPADOS
    
    function getArea(int $x, int $y){
        
        return $x * $y;
    }
    
    function getSum(int ...$valores){
        
        return array_sum($valores);
        
    }
    
    echo getArea(10, 5) . "<br/>";
    echo "<br/>";
    echo getSum(1,2,3,4,5,6,100);
?>
   