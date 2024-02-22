<?php
//Maneira incorreta do conceito de Princípio Aberto-Fechado
/* class ContratoClt {
    public function calcularSalario() {

    }
}
class Estagio {
    public function bolsaAuxilio() {

    }
}
class folhaDePagamento {
    public function calcular($funcionario) {
        $salario = 0;
        if($funcionario instanceof ContratoClt) {
            $salario = $funcionario->calcularSalario();        
        }
        elseif ($funcionario instanceof Estagio){
            $salario = $funcionario->bolsaAuxilio();
        }
        return $salario;
    }
} */

//Maneira correta:
class Remuneravel implements Remuneravel {
    public function remuneracao() {
        
    }
}
class ContratoClt implements Remuneravel {
    public function remuneracao() {
        
    }
}
class Estagio implements Remuneravel {
    public function remuneracao() {
        
    }
}
class folhaDePagamento {
    public function calcular(Remuneravel $funcionario) {
    return $funcionario->remuneracao();
    }
}
?>