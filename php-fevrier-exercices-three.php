<?php

$a = 12;
$b = 15;
$c = 0;

$c = $a;
$a = $b;
$b = $c;

echo "Maintenant, a vaut:" .$a. "et b vaut : ".$b;
?>