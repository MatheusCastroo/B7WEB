<?php

// Definindo uma interface chamada Forma
interface Forma {
    public function getTipo();
    public function getArea();
}

// Implementação da interface para a classe Quadrado
class Quadrado implements Forma {
    private $largura;
    private $altura;

    // Construtor da classe Quadrado
    public function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }

    // Implementação do método getTipo da interface Forma
    public function getTipo()
    {
        return 'quadrado';
    }

    // Implementação do método getArea da interface Forma
    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

// Implementação da interface para a classe Circulo
class Circulo implements Forma {
    private $raio;

    // Construtor da classe Circulo
    public function __construct($r)
    {
        $this->raio = $r;
    }

    // Implementação do método getTipo da interface Forma
    public function getTipo()
    {
        return 'Circulo';
    }

    // Implementação do método getArea da interface Forma
    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

// Criando uma instância da classe Quadrado
$quadrado = new Quadrado(5, 5);

// Criando uma instância da classe Circulo
$circulo = new Circulo(3);

// Criando um array com objetos Quadrado e Circulo
$objetos = [
    $quadrado,
    $circulo,
];

// Iterando sobre os objetos e exibindo informações
foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "Área: " . $tipo . " : " . $area . "</br>";
}

?>