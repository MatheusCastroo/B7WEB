<?php
echo date('d/m/Y H:i:s'); /*Mostrar a hora atual*/

$data = '2020-03-07';
echo '<br>';
echo date('d/m/Y', strtotime($data)); //Formatar a data para BR
?>