<?php
class Post { 
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLike() { //Quando for executado, vai aumentar 1 like.
        $this->likes++;
    }
}
$post1 = new Post(); 
$post1->aumentarLike(); //Deve aumentar 2 likes
$post1->aumentarLike();

$post2 = new Post(); //Deve aumentar 1 like
$post2->aumentarLike();

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";
?>