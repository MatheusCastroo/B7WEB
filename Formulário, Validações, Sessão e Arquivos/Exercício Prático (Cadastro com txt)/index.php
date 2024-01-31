<form method="POST">
    <label>Novo Nome: </br></label>
    <input type="text" name="nome">
    <input type="submit" value="Adicionar">
    <h1>Lista de nomes:</h1>
</form>
<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
