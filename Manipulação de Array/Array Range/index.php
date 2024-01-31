<?php

$array = range(1,30,2); // Primeira validação é o primeiro item, segunda é o segundo item e a terceira é o intervalo que vai ser pulado.
// $array = range('a','b'); pode ser usado como letra também.

foreach ($array as $item){
echo $item . "<br>";
}