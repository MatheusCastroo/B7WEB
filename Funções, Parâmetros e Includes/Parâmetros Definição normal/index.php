<?php
// Definição da função somar
function somar($n1, $n2) {
    // Dentro da função, os parâmetros $n1 e $n2 são somados e o resultado é armazenado em $total
    $total = $n1 + $n2;
    // O valor de $total é retornado pela função
    return $total;
}

// Chamada da função somar com os argumentos 1 e 3, o resultado é armazenado em $x
$x = somar(1, 3);

// Chamada da função somar com os argumentos 5 e 3, o resultado é armazenado em $y
$y = somar(5, 3);

// Chamada da função somar com os argumentos $x e $y, o resultado é armazenado em $w
$w = somar($x, $y);

// O valor de $w é impresso na tela
echo $w;
?>
