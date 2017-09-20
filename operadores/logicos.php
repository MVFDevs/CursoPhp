<?php
$v1 = 1;
$v2 = 1;
$v3 = 2;
$v4 = 3;
$res1 = $v1 == $v2;
echo 'Resultado 1: <br>';
var_dump($res1);
echo '<br>';
$res2 = $v3 == $v4;
echo 'Resultado 2: <br>';
var_dump($res2);
echo '<br>';
echo '<br>';
echo '<br>';
$res3 = $res1 || $res2 ;
echo 'Resultado final: <br>';
var_dump($res3);

 ?>
