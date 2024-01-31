<?php
$array = ['a','b','c','d','e','f'];

array_splice($array, 1, 2,['K','O']); /*Inicia do B e remove o vetor 'B' e 'C' e substitui pelo 'K' e 'O'*/

print_r($array);

?>