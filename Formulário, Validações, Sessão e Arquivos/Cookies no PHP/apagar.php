<?php
setcookie('nome', time() - 10600);
header("location: index.php");
exit;