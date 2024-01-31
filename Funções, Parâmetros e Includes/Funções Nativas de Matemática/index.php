<?php

$numero = -8.4;


echo"<h1>Lista das funções matemáticas apresentadas nesta aula:</h1>";

echo"<b>Número inteiro (abs)</b> <br/>";
echo abs($numero);
echo"<hr/>";

echo"<b>Número do PI (Função matemática)</b> <br/>";
echo pi();
echo"<hr/>";

echo"<b>Número arredondado para BAIXO</b> <br/>";
$numero2 = 2.7;
echo floor($numero2);
echo"<hr/>";

echo"<b>Número arredondado para CIMA</b> <br/>";
$numero2 = 2.7;
echo ceil($numero2);
echo"<hr/>";

echo"<b>Número arredondado para CIMA OU PARA BAIXO(dependendo do numero após a virgula)</b> <br/>";
echo round($numero2);
echo"<hr/>";

echo"<b>Número arredondado para CIMA OU PARA BAIXO(conforme quantitdade de CASAS DECIMAIS)</b> <br/>";
$numero3 = 12.8893247;
echo round($numero2,2);//2 cadas decimais
echo"<hr/>";

echo"<b>Função que gera um número aleatório toda vez que atualiza a página.</b> <br/>";
$aleatorio = rand(3,9);
echo $aleatorio;
echo"<hr/>";

echo"<b>Função que gera um número aleatório toda vez que atualiza a página.</b> <br/>";
$aleatorio = rand(3,9);
echo $aleatorio;
echo"<hr/>";

echo"<b>Função para saber qual é o MAIOR número da lista(array).</b> <br/>";
$lista = [1, 4, 9, 8];
echo max($lista);
echo"<hr/>";

echo"<b>Função para saber qual é o MENOR número da lista(array).</b> <br/>";
$lista = [1, 4, 9, 8];
echo min($lista);
echo"<hr/>";

?>