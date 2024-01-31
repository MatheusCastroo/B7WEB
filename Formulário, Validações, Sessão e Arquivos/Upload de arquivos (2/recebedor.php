<?php

// Inicia a exibição de tags <pre> para melhor formatação na saída
echo '<pre>';

// Exibe informações sobre o array $_FILES, que contém informações sobre o arquivo enviado via formulário
print_r($_FILES);

// Tipos de arquivos permitidos para upload
$permitidos = ['image/jpeg', 'imagem jpg', 'image/png'];

// Verifica se o tipo de arquivo enviado está na lista de tipos permitidos
if (in_array($_FILES['arquivo']['type'], $permitidos)) {
    
    // Gera um nome único para o arquivo usando o timestamp atual e um número aleatório
    $nome = md5(time() . rand(0, 1000)) . '.jpg';
    
    // Move o arquivo temporário para o diretório 'arquivos' com o nome gerado
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);
    
    // Exibe uma mensagem indicando que o arquivo foi salvo com sucesso
    echo "Arquivo salvo com sucesso";
} else {
    
    // Exibe uma mensagem indicando que o tipo de arquivo não é permitido
    echo "Arquivo não permitido!";
}
