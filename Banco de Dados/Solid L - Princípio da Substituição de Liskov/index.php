<?php 
class A {
    public function getNome() {
        return 'Meu nome é A';
    }
}
class B extends A {
    public function getNome() {
        return 30;//Violando a regra de Liskov, pois deveria ser uma string já que fez um extends com a classe A, então precisa ter o mesmo retorno da classe original.
    }
}
function imprimeNome(A $obj){
    return $obj->getNome();
} 
$objeto1 = new A();
$objeto2 = new B();
echo imprimeNome($objeto1)."<br/>";
echo imprimeNome($objeto2) 

?>