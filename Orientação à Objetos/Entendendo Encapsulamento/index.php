<?php
class Post
{
    // Propriedade pública que armazena a quantidade de likes
    public $likes = 0;

    // Propriedade pública que armazena os comentários (inicializada como um array vazio)
    public $comments = [];

    // Propriedade privada que armazena o autor da postagem (inicializada como uma string vazia)
    private string $author = '';

    // Método público para aumentar a quantidade de likes
    public function aumentarLike()
    {
        $this->likes++;
    }

    // Método público para definir o autor da postagem
    public function setAuthor($n)
    {
        // Verifica se o nome do autor tem pelo menos 3 caracteres
        if (strlen($n) >= 3) {
            // Converte a primeira letra do nome para maiúscula e atribui à propriedade privada
            $this->author = ucfirst($n);
        }
    }

    // Método público para obter o autor da postagem
    public function getAuthor()
    {
        // Retorna o autor (ou uma string vazia se não houver autor definido)
        return $this->author ?? '';
    }
}

// Cria uma instância da classe Post (post1) e define o autor como 'Matheus'
$post1 = new Post();
$post1->setAuthor('Matheus');

// Cria outra instância da classe Post (post2) e define o autor como 'Fulano'
$post2 = new Post();
$post2->setAuthor('Fulano');

// Exibe as informações da postagem 1 (likes e autor)
echo "POST 1: " . $post1->likes . " LIKES - " . $post1->getAuthor() . "</br>";

// Exibe as informações da postagem 2 (likes e autor)
echo "POST 2: " . $post2->likes . " LIKES - " . $post2->getAuthor() . "</br>";
