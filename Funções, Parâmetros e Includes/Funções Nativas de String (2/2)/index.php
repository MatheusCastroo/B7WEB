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

echo"<b>Função que procura uma string ou palavra dentro de outra string e retorna a posição do que estamos procurando.</b> <br/>";
$nomeCompleto = 'Tayse Rosa';
$nomeAlterado = strpos($nomeCompleto, 'a');//Posição onde aparece a letra a na 1º vez.
echo $nomeAlterado;
echo"<hr/>";

echo"<b>Função que procura uma string ou palavra dentro de outra string e retorna a posição do que estamos procurando(exemplo COM IF).</b> <br/>";
$nomeCompleto = 'Tayse Rosa';
$posicao = strpos($nomeCompleto, 'a');//Posição onde aparece a letra a na 1º vez.
if($posicao >-1){
echo'Achou';
}else{
echo'Não achou';
}
echo"<hr/>";

echo"<b>Função que transforma a PRIMEIRA LETRA APENAS EM MAIÚSCULA </b> <br/>";
$nomeCompleto = 'tayse rosa';
$nomeAlterado = ucfirst($nomeCompleto);
echo $nomeAlterado;
echo"<hr/>";
echo"<b>Função que transforma a PRIMEIRA LETRA DE CADA PALAVRA EM MAIÚSCULA </b> <br/>";
$nomeCompleto = 'tayse rosa';
$nomeAlterado = ucwords($nomeCompleto);
echo $nomeAlterado;
echo"<hr/>";

echo"<b>Função que transforma cada palavra em 1 item do array </b> <br/>";
$nomeCompleto = 'tayse rosa mais um sobrenome';
$nomeAlterado = explode(' ', $nomeCompleto); //1º o que esta procurando | onde vai procurar
print_r($nomeAlterado);
echo"<hr/>";

?>