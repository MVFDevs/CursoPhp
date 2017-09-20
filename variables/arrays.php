<?php
$array = ['Rojo','Azul','Negro'];
//Revisamos el contenido del array
var_dump($array);
//Arreglos en php no son mas que un enlace entre cadenas y valores, no necesita un orden determinado
//Llave se le determina al cadena relacional especifica del valor. Es el valor único del elemento dentro del arreglo
//El siguiente ejemplo explica la definición anteriormente dicha, 'calor1' es la llave  del primer elemento y 'Rojo' es su valor
$array2 = [
  'color1'=>'Rojo',
  'color2' =>'Azul',
  'color3' =>'Negro'
];
var_dump($array2);
 // Revisar un valor en especifico del arreglo con una llave
 var_dump($array2['color1']);

 ?>
