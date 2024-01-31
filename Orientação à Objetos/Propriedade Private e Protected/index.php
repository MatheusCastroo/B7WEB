<?php
class Post {
    protected int $id; // Protecd - Pode ser alterado por qualquer classe que tem o objeto.
    private int $likes = 0; // Private - Só pode ser alterado pela classe mae.

    public function setId($i) {
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }
    public function setLikes($n) {
        $this->likes = $n;
    }
    public function getLikes() {
        return $this->likes;
    }
}
class foto extends Post { //Vai herdar tudo da classe Post
    private $url;
    public function __construct($id)
    {
        $this->setId($id);        
    }
    public function setUrl($u) {
        $this->url = $u;
    } 
    public function getUrl() {
        return $this->url;
    }
}

$foto = new Foto(20);
$foto->setLikes(12); 
$foto->setUrl('abc');

echo "Foto: #".$foto->getId(). " - ".$foto->getLikes(). " Likes";