<?php
// Definição da função 'somar'
function somar($n1, $n2, $n3=0) {
    $total = $n1 + $n2 + $n3;
    return $total;
}
// Chamadas da função 'somar' e atribuição de resultados a variáveis
$x = somar(1, 3);
$y = somar(5, 3, 2);
$w = somar($x, $y);
// Impressão do resultado
echo $w;

/*
A linha de código function somar($n1, $n2, $n3=0) define uma função chamada somar em PHP. Vamos analisar cada parte dessa linha:

function somar: Isso indica que você está definindo uma função chamada somar. O termo function é uma palavra-chave do PHP usada para começar a definição de uma função. somar é o nome escolhido para a função, e você pode chamá-la usando esse nome.

($n1, $n2, $n3=0): Essa parte declara os parâmetros da função, que são os valores que a função espera receber quando for chamada. No caso, existem três parâmetros:

$n1: Este é o primeiro parâmetro da função.
$n2: Este é o segundo parâmetro da função.
$n3=0: Este é o terceiro parâmetro da função, mas possui um valor padrão de 0. Isso significa que, se você chamar a função sem fornecer um valor para $n3, o PHP assumirá automaticamente o valor 0.
Então, resumindo, a linha de código está declarando uma função chamada somar que aceita três parâmetros: $n1, $n2 e $n3, sendo que $n3 tem um valor padrão de 0. Essa função provavelmente realiza a soma desses parâmetros e retorna o resultado. */