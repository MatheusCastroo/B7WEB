<?php
class Matematica {
    public static string $nome = 'Matheus'; //caso tenha o método static, não precisa de um objeto pra acessa-lo dentro da function.
    public static function somar ($x, $y) {
        return $x + $y;
    }
}

echo Matematica::$nome. "</br>";
echo Matematica::somar(20, 30);

?>