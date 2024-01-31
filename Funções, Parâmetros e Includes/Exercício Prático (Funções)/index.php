<?php
// Define uma string representando uma data
$data = "2023-12-17";

// Converte a string da data para um carimbo Unix usando a função strtotime
$var = strtotime($data);

// Define uma função chamada 'data' que recebe um carimbo Unix como entrada e retorna o dia da semana em português
function data($data)
{
    // Usa a função date para obter a representação numérica do dia da semana (1 para segunda-feira, 2 para terça-feira, etc.)
    $teste = date("N", $data);
    
    // Usa uma estrutura switch para associar a representação numérica ao dia da semana correspondente em português
    switch($teste) {
        case "1":
            return "Segunda-Feira";
            break;
        case "2":
            return "Terça-Feira";
            break;
        case "3":
            return "Quarta-Feira";
            break;
        case "4":
            return "Quinta-Feira";
            break;
        case "5":
            return "Sexta-Feira";
            break;
        case "6":
            return "Sábado";
            break;
        case "7":
            return "Domingo";
            break;
    }
}

// Chama a função 'data' com o carimbo Unix e exibe o resultado
echo data($var);
