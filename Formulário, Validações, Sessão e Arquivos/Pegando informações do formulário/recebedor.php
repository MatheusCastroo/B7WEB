<?php
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade'); 
/*filter_input é uma função do PHP que obtém uma variável externa pelo seu nome e opcionalmente filtra seu valor. A função filter_input além de obter o valor de uma campo pode aplicar filtros no retorno. */

if ($nome && $idade) {
    echo "Nome: " . $nome. "<br/>"; 
    echo "Idade " . $idade;
}
else {  
    header("location: index.php"); //Caso tenha faltado algum dado, deve retornar para a tela de index.
    exit; //Caso faça um header de direcionamento, colocar o exit para segurança.
}