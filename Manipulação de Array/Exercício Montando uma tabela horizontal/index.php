<?php
$array = [
'nome' => 'Matheus',
'idade' => 20,
'cidade' => 'Maringá',
'estado' => 'PR'
];
?><table border="2">
<?php
echo "<tr>";
foreach ($array as $item => $values) {
echo '<tr>';
echo  '<td>'.$item .'</td>';
echo '</td>' . $values . '</td>';
echo '</tr>';
}
echo '</tr>';
?>
</table>