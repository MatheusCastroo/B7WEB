<?php

// Definindo a classe Calculadora
class Calculadora {
    // Atributo privado para armazenar o valor atual
    private $valor = 0;

    // Método para adicionar um valor ao total
    public function add($arg) {
        $this->valor = $this->valor + $arg;
    }

    // Método para subtrair um valor do total
    public function sub($arg) {
        $this->valor = $this->valor - $arg;
    }

    // Método para multiplicar o total por um valor
    public function multiply($arg) {
        $this->valor = $this->valor * $arg;
    }

    // Método para dividir o total por um valor
    public function divide($arg) {
        $this->valor = $this->valor / $arg;
    }

    // Método para obter o valor total atual
    public function total() {
        return $this->valor;
    }

    // Método para limpar (zerar) o valor total
    public function clear() {
        $this->valor = 0;
    }
}

// Criando uma instância da classe Calculadora
$calc = new Calculadora();

// Executando operações na calculadora
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

// Exibindo o resultado total
echo "TOTAL: ".$calc->total();

// Limpando o valor total
$calc->clear();
