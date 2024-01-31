<?php

echo"<h1>Lista das funções String apresentadas nesta aula:</h1>";

echo"<b>Função para remover espaços</b> <br/>";
$nomeSujo = ' Tayse';
$nomeLimpo = trim($nomeSujo);
echo $nomeLimpo;
echo"<hr/>";

echo"<b>Função contar a quantidades de caracteres em uma string</b> <br/>";
$nomeSujo = ' Tayse';
$nomeLimpo = strlen($nomeSujo); //Observação: A funçao strlen conta a quantidade de espaços tambem.
echo $nomeLimpo;
echo"<hr/>";

echo"<b>Função que transforma a string TODA EM MINÚSCULA</b> <br/>";
$nomeMaiusculo = 'TAYSE';
echo strToLower($nomeMaiusculo);
echo"<hr/>";

echo"<b>Função que transforma a string TODA EM MAIUSCULA</b> <br/>";
$nomeMaiusculo = 'tayse';
echo strtoupper($nomeMaiusculo);
echo"<hr/>";

echo"<b>Função que SUBSTITUI palavras dentro da frase por exemplo</b> <br/>";
$nomeCompleto = 'Tayse Rosa';
$nomeAlterado = str_replace('Rosa', 'Silva', $nomeCompleto);
echo"Antes: ".$nomeCompleto ."<br/>";
echo"Antes: ".$nomeAlterado;
echo"<hr/>";

echo"<b>Função que PEGA AS 3 PRIMEIRAS CARACTERES da palavra</b> <br/>";
$nomeCompleto = 'Tayse Rosa';
$nomeAlterado = substr($nomeCompleto, 0, 3);
echo $nomeAlterado;
echo"<hr/>";



?>
