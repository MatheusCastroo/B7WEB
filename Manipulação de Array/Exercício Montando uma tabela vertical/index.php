<?php
$array = [
    'nome' => 'Matheus',
    'idade' => 20,
    'cidade' => 'Maringá',
    'estado' => 'PR'
];
?>
<table border="2">
    <tr>
        <?php
        foreach ($array as $item => $value) {
            echo '<th>' . $item . '</th>';
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($array as $item => $value) {
            echo '<td>' . $value . '</td>';
        }
        ?>
    </tr>
</table>
