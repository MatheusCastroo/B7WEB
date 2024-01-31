<?php
session_start(); 
require_once('header.php');

if($_SESSION['aviso']) {   /*Validar se existe a sessão*/
    echo $_SESSION['aviso']; /*Mostrar o aviso colocado no recebedor.php*/
    $_SESSION ['aviso'] = '';/*Após aparecer o aviso da sesão, deixar vazio novamente para não manter em tela */

}
?>
<a href="apagar.php">Apagar cookie</a>
<form method="POST" action="recebedor.php">
<label>
        E-mail
        <br />
        <input type="email" name="email" />
        <br />
    <br />
    </label>
    <label>
        Nome:
        <br />
        <input type="text" name="nome" />
    </label>
    <br />
    <br />

    <label>
        Idade:
        <br />
        <input type="number" name="idade" />
    </label>
    <br /><br />
    <input type="submit" value="Enviar" />
</form>