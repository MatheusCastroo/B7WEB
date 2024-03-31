<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $posts = [
            ['titulo' => 'Titulo teste 1', 'corpo' => 'Corpo de teste 1'],
            ['titulo' => 'Titulo teste 2', 'corpo' => 'Corpo de teste 2'],
            ['titulo' => 'Titulo teste 3', 'corpo' => 'Corpo de teste 3']
        ];
        $nome = 'Matheus';
        $this->render('home', ['nome' => $nome, 'idade' => 20, 'posts' => $posts]);
    }
    public function fotos()
    {
        $this->render('fotos');
    }
    public function foto($parametros)
    {
        echo "Acessando a foto: " . $parametros['id'];
    }
    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        echo 'Opa, ' . $args['nome'];
    }
}
