<?php
// Comillas simples ('') , el texto se pasará directamente al usuario , tal cual lo escribamos dentro de estas
// Comillas dobles (""), PHP tratará de buscar variables dentro de estas
$intVar = 5;
$stringVar = 'Hello $intVar';
//He aqui la diferencia entre comillas simples y comillas dobles
$string2Var = "Hello $intVar";
echo $stringVar;
echo $string2Var;
 ?>
