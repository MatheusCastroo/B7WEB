<?php
class Post { //Criação da classe
    public $likes = 0;
    public $comments = [];
    public $author;
}
$post1 = new Post(); //Criação do objeto post1
$post1->likes = 3;

$post2 = new Post();//Criação do objeto post2
$post2->likes = 10;

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";
?>