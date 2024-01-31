<?php
$nome = 'Matheus';
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? '';  

echo $nomeCompleto; /*Se tiver o sobre nome, retorna sobrenome, se não tiver deve retorna null(nada)*/
?> 