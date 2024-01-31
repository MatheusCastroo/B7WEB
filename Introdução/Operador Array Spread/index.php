<?php

$bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];
$bolo2 = [ 
    'vasilha',
    'agua morna',
    ...$bolo1, //Puxar tudo do bolo 1
    'corante'
];