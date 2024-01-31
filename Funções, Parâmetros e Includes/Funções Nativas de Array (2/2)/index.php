
<?php
echo "<h1>Lista das funções nativas de ARRAY apresentadas nesta aula:</h1>";

$list = [
'nome 1',
'nome 2',
'nome 3',
'nome 4',
'nome 5',
];

echo "<b>Função para contar quantos itens tem no array</b> <br/>";
$arrayList = count($list);
echo "Total: ".$arrayList;
echo "<hr/>";

echo "<b>Função que vai gerar um array com a diferença entre os outros 2 arrays</b> <br/>";
$alunos1 = [
'Tayse',
'Pedro',
'Jose',
'paula',
'Francisca',
];

$alunos2 = [
'Theo',
'Diego',
'Pipoka',
'Myke',
'Francisca',
];

$alunos3 = array_diff($alunos1, $alunos2);
print_r($alunos3);
echo "<hr/>";

echo "<b>Função para filtrar algo no array</b> <br/>";
$numeros = [10,20,24, 91,18];
$filtrados = array_filter($numeros, function($item){
if($item<30){
return true;
}else{
return false;
}
});

print_r($filtrados);
echo "<hr/>";

echo "<b>Função para mapear um array(e por exemplo multiplicar cada item do array por 2)</b> <br/>";
$numeros = [10,20,24, 91,18];
$dobrados = array_map(function($item){
return$item*2;
}, $numeros);
print_r($dobrados);

echo "<hr/>";


echo "<b>Função para REMOVER O ULTIMO ITEM DO ARRAY</b> <br/>";

$numeros = [10,20,24, 91,18];
array_pop($numeros);
print_r($numeros);

echo "<hr/>";

echo "<b>Função para REMOVER O PRIMEIRO ITEM DO ARRAY</b> <br/>";

$numeros = [10,20,24, 91,18];
array_shift($numeros);
print_r($numeros);

echo "<hr/>";

echo "<b>Função para retornar um BOOLEAN se encontrar um item no array</b><br/>";

$numeros = [10,20,24, 91,18];
if (in_array(90,$numeros)){
echo'EXISTE';
}else{
echo'NÃO EXISTE';
}

echo "<hr/>";

echo "<b>Função para encontrar um item no array E ONDE ESTA este item na chave do array</b><br/>";

$numeros = [10,20,24, 91,18];
$pos = array_search(91,$numeros);
echo $pos;

echo "<hr/>";

echo "<b>Função para Ordenar em ordem CRESCENTE</b><br/>";

$numeros = [10,20,24, 91,18];
sort($numeros);
print_r($numeros);

echo "<hr/>";


echo "<b>Função para Ordenar em ordem DECRESCENTE</b><br/>";

$numeros = [10,20,24, 91,18];
rsort($numeros);
print_r($numeros);
echo "<hr/>";

echo "<b>Função para Ordenar em ordem DECRESCENTE, mantendo o número da chave de cada item</b><br/>";

$numeros = [10,20,24, 91,18];
asort($numeros);
//arsort($numeros);
print_r($numeros);

echo "<hr/>";


?>