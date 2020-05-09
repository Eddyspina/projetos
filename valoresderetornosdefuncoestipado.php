<?php
declare(strict_types=1);

function cubo(float $num):float
{
    return $num * $num * $num;
}

function teste() : array
{
    return [10, "eXcript", 5.1];
}

function x() : string
{
    
    return "aa";
}


echo cubo(10.5);
echo "<br/>";
var_dump( teste());
echo "<br/>";
echo x();



?>
