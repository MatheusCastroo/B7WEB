<?php 

$array = [
    'nome' => 'Matheus',
    'age' => 90,
    'empresa' => 'B7Web',
    'cor' => 'Azul',
    'profissao' => 'DEV'
];

if(key_exists('idade', $array)) { //Valida se o array existe a chave "idade"
    $idade = $array['idade'];
    echo $idade. "anos";
}
else {
    echo 'Não tem idade';
}
