<?php
$value = $_COOKIE['contador'];
$value++;
setcookie('contador',$value);
echo '<p>Adding 1</p>'
 ?>
