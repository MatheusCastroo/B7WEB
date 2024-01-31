<?php
   // Início do bloco PHP.

   // Declaração da função "somar" que recebe dois parâmetros e uma variável por referência.
   function somar($n1, $n2, &$total){
       $total = $n1 + $n2;
   }

   // Atribuição de valores às variáveis $x, $y e $soma.
   $x = 3;
   $y = 2;
   $soma = 0;

   // Chamada da função somar passando $x, $y como argumentos e $soma por referência.
   somar($x, $y, $soma);

   // Impressão na tela da expressão que representa a soma de $x e $y, seguida pelo resultado armazenado em $soma.
   echo $x.' + '.$y.' = '.$soma;

   // Impressão de uma quebra de linha no navegador.
   echo '<br>';

   // Criação de um array chamado $lista com os elementos 4, 9 e 2.
   $lista = [4,9,2];

   // Ordenação do array $lista em ordem crescente.
   sort($lista);

   // Impressão na tela do array ordenado utilizando a função print_r.
   print_r($lista);

   // Fim do bloco PHP.
?>
