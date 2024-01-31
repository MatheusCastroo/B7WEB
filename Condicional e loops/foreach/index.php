<?php

$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];
echo "<h2>Ingredientes</h2>";
foreach($ingredientes as $chave => $valor) {
    echo "Item:".$chave.': '.$valor."<br>";
}