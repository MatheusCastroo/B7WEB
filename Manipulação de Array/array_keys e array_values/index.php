<?php 
$array = [
    'nome' => 'Matheus',
    'age' => 90,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'DEV'
];
$chaves = array_keys($array); /*Pega a chave do array */
print_r($chaves);

$valores = array_values($array); /*Pega  resultado da chave do array*/
echo "</br>";
print_r($valores);
?>