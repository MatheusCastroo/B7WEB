<?php
$imagem = imagecreatetruecolor(300, 300);
$cor = imagecolorallocate($imagem, 255, 0, 0); // imagem e a cor rgb
imagefill($imagem, 0, 0, $cor);
imagepng($imagem, 'nova_imagem.jpg', 100 )//Imagem, aonde a imagem vai ser salva, qualidade
?>