<?php
$texto = 'Bonieky Lacerda';
file_put_contents('nome.text', $texto); // Criar um arquivo com o nome 'nome.txt' onde vai receber a variavel $texto. 
echo "Arquivo criado com sucesso!";
?>

<?php
//Caso queira adicionar um texto em um txt já existente

$texto = file_get_contents('texto.txt');
$texto .="\nMatheus Castro";
file_put_contents('texto.txt', $texto); // Criar um arquivo com o nome 'nome.txt' onde vai receber a variavel $texto. 

echo "Arquivo criado com sucesso!";
?>