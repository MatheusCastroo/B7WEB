<?php
$hash = '$2y$10$AZAdirGwtm8gasUsOj/wDOdOJbDXLrMpIqTDKYPusAHtfmpdLTz2i';
$senha = '1234';

if(password_verify($senha, $hash)) {
    echo 'Senha correta';

}
else {
    echo 'Senha incorreta';
}

?>