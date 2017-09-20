<?php
$array1 = [
  0 => 'a',
  1 => 'b',
  2 => 'c'
];
$array2 = [3 =>'d',4=>'e'];

//Unión de arreglos por llaves
$res = $array1 + $array2;
var_dump($res);

//
$array1 = [
  1 => 'b',
  0 => 'a',

  2 => 'c'
];
$array2 = ['a','b','c'];
//con == compara si los elementos dentro del array son iguales , no importa el orden
// con === compara los elementos con exactitud (orden y elementos que posee)
$resl = $array1 === $array2;
var_dump($resl);
 ?>
