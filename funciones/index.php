<?php
//Las variables generales creadas fuera de las funciones no se pueden utilizar dentro de estas, así que toda variable debe ser declarada dentro de la función para ser utilizada
function hello($name)
{
echo 'Hello '.$name;
}
hello('Martin');
echo '<br>';
function sum($a,$b){
  return $a+$b;
}

$res = sum(5,7);
echo $res;
?>
