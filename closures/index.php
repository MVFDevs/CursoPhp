<?php
  $x = 3;
  $numeros= [1,2,3,4,5];
  $closure = function($n) use ($x){
    return $n * $x;
  };
  $x=4;
  //se recorre el arreglo de numeros y se le entrega un función anónima
  $res = array_map($closure, $numeros);

  var_dump($res);
 ?>
