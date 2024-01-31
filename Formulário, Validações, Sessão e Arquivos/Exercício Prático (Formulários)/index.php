<?php
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
if ($nome) {
    echo "Olá, " . $nome. " "; 
}
else {
    header("location: login.php");
    exit; 
}
?>
<a href="login.php">Sair</a>
