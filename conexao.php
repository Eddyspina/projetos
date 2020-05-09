<?php
$host     = '127.0.0.1:3306';      // endere�o do servidor
$db       = 'atividades';    // nome do Banco
$usuario  = 'root';                       // nome do usu�rio
$senha    = '12345';                    // senha deste usu�rio
$con = mysqli_connect($host,$usuario,$senha,$db) ;          // conex�o

$sql = 'SELECT * FROM registro';                               // monta o SELECT

$query = mysqli_query($con,$sql) ;                              // executa o SELECT

$aRet=array();                                                       // prepara o array

while ($row = mysqli_fetch_assoc($query))       // traz registro a registro para o array $aRet
{
    $aRet[] = $row;
}

mysqli_free_result($query);

mysqli_close($con);                                                  // fecha a conex�o
$total = 0;
foreach($aRet as $lista){                                             // fecha a conex�o
    echo $lista['id'] . "<br/>" . $lista['data_exec'] ."<br/>" . $lista['horainicio_exec'] . "<br/>"  . $lista['horafim_exec']. "<br/>"  . $lista['obs_exec']. "<br/>";                 // apresenta na tela os registro
    $total = (strtotime($lista['horafim_exec'])) -  (strtotime($lista['horainicio_exec']));
    $total = ($total/3600); 
}
$espaco='#######' . "<br/>";
echo  $espaco . " TOTAL de horas: " . number_format($total,2);



?>
