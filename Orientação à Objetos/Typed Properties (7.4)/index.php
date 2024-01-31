<?php 

class Post { 
    public int $likes = 0; //Propriedade precisa ser inteira, pois o "int" faz a validação.
    public array $comments = []; //Só recebe um array
    public string $author; //Só recebe uma string

    public function aumentarLike() { 
        $this->likes++;
    }
}
$post1 = new Post(); 

$post2 = new Post(); 


echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";
?>
