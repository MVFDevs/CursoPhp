<?php
// == es un comparador de variables, con un resultado de veradero o falso, cual sea el caso
$v1 = 10;
$v2 = 12;
$res = $v1 == $v2;
var_dump($res);
// PHP convierte todo tipo de variables para compararlas, debido a esto, si se compara 10 como entero y 10 como cadena el resultado será un verdadero, por lo anteriormente dicho
$b1 = 10;
$b2 = '10';
$result = $b1 == $b2;
var_dump($result);
// con === PHP compara si son exactamente los mismo tipos y valores

$a1 = 10;
$a2 = 10;
$resul = $a1 <=> $a2;
var_dump($resul);
 ?>
