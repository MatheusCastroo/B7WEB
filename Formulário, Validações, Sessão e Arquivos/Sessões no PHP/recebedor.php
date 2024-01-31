<?php
session_start(); //Salvar a sessão de quem fez o login, com isso, você consegue verifica o log do usuário que tem vinculo na sessão.

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT); 



if ($nome && $idade && $email ) {
    echo "E-mail: ".$email."<br/>";
    echo "Nome: " . $nome. "<br/>"; 
    echo "Idade " . $idade;
}
else { 
    $_SESSION['aviso'] = 'Preencha os itens corretamente!'; /*Validar essa mensagem no index através de uma sessão*/
    header("location:  index.php"); 
    exit; 
}