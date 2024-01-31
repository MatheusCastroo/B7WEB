<?php
class Post { 
    public $likes = 0;
    public $comments = [];
    public $author;

    public function __construct($qtLikes = 0) //Método construtor é executado sempre que um objeto é criado, nesse caso foi executado duas vezes pois tem 2 objetos: $post1 e $post2
    {
       $this->likes = $qtLikes;
    }  
    public function aumentarLike() {
        echo 'abc';
        $this->likes++;
    }
}
$post1 = new Post(25); //Vai receber 25 likes, pois vem do método construtor
$post2 = new Post(); //Vai receber 0 like, pois vem um valor padrão do método construtor


echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";
?>