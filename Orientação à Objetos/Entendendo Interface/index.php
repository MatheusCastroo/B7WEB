<?php
interface Database {
    public function listarProdutos();
    public function adicionarProdutos();
    public function alterarProduto();
}
class MysqlDB implements Database {
    public function listarProdutos() {

    }
    public function adicionarProdutos() {
        echo "Adicionando com MYSQL";
    }
    public function alterarProduto() {

    }

}

class OracleDB implements Database {
    public function listarProdutos() {

    }
    public function adicionarProdutos() {
        echo "Adicionando com Oracle";
    }
    public function alterarProduto() {

    }
}
class NodeDB implements Database {
    public function listarProdutos() {

    } 
    public function adicionarProdutos() {
        echo "Adicionando com Node";
    }
    public function alterarProduto() {

    }
}



$db = new OracleDB(0);
$db->adicionarProdutos();  


 /*Quando a gente começa a aprender sobre interface a perspectiva é bem essa mesmo, e por isso que é um pouco complicado de entender a utilidade (já que você vai ter que lembrar de dar o implements na interface de qualquer forma). Fica mais fácil de ver como interfaces são uma das melhores coisas de OOP quando você pensa da perspectiva de linguagem tipada, porque normalmente quando você programa em uma linguagem como o PHP que, apesar de suportar tipagem, é primariamente uma linguagem dinâmica então você aprende PHP sem se preocupar com tipagem nem nada.
  
E interface é algo que só faz sentido se você tem a mentalidade de quem usa uma linguagem tipada (já que técnicamente ela é só um tipo, logo se você não tipar nada, ela não serve para nada).
  
Agora explicando a coisa de fato, não é errado dizer que a interface é o que você usa para garantir que uma classe implementou X métodos. Só que geralmente a idéia é proteger os outros códigos que vão usar essa interface e não o código que implementa a interface. Então num cenário onde você tem isso aqui:
<?php
interface ExampleInterface
{
    public function doStuff(): void;
}

class Foo
{
    public function method(): void
    {
        echo "foo";
    }
}

class Bar implements ExampleInterface
{
    public function doStuff(): void
    {
        echo "bar";
    }
}

function run(ExampleInterface $example): void
{
    $example->doStuff();
}
  
A idéia de se criar uma interface é proteger a função run, pois ela chama o método doStuff esperando que $example seja um objeto e que ele tenha um método doStuff e que esse método não aceite nenhum parâmetro e que ele também não retorne nada. Porém se nós não tipassemos nada, poderíamos passar um int para ela, e ai ela daria um erro na execução da função (que nesse caso pode não ser nada, mas você tem que lembrar que o código vai ser executado até chegar na linha onde o erro vai acontecer, e nesse caso você poderia já ter feito uma alteração no banco por exemplo e dado um problemão).
Então para evitar isso a gente poderia usar a interface, pois como ela é um tipo de metadado, o seu editor pode já te informar que algo está errado enquanto você programa, ou mesmo sem esse suporte ele vai gerar um erro antes da função ser executada (o que evita de lançar um foguete para lua sem querer), e também vai ter um erro mais descritivo de qual foi o problema (ao invés de cannot call undefined method in null por exemplo).
  
Você poderia proteger essa função usando o nome da classe como tipo também, só que ai você só poderia passar instâncias dessa classe para a função run, o grande benefício de se utilizar a interface no lugar do nome da classe é que você pode passar a instância de qualquer classe que implemente a interface, podendo assim trocar de códigos com muito mais facilidade graças ao poder do polimorfismo, coisa que seria mais difícil de se fazer antes. */
?>