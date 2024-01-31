<?php
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS); //Transformar tudo em caracteres, evitando que no formulario seja enviado algum tipo de código
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //Validar se realmente tem um formato de e-mail.
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT); //Validar se é um número inteiro
/*filter_input é uma função do PHP que obtém uma variável externa pelo seu nome e opcionalmente filtra seu valor. A função filter_input além de obter o valor de uma campo pode aplicar filtros no retorno. */
/*
FILTER_VALIDATE_EMAIL 
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_vALIDATE_URL

FILTER_SANITIZE_EMAIL remover tudo que não faz parte do e-mail
FILTER_SANITIZE_STRING remover tudo que não seja string
FILTER_SANITIZE_SPECIAL_CHARS transformar tudo em caracteres
FILTER_SANITIZE_NUMBER_INT remover tudo que não for número inteiro
*/

if ($nome && $idade && $email ) {
    echo "E-mail: ".$email."<br/>";
    echo "Nome: " . $nome. "<br/>"; 
    echo "Idade " . $idade;
}
else {  
    header("location: index.php"); //Caso tenha faltado algum dado, deve retornar para a tela de index.
    exit; //Caso faça um header de direcionamento, colocar o exit para segurança.
}