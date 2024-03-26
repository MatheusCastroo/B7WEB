<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home');
    }
    public function fotos() {
        echo 'fotos';
    }
    public function foto($parametros) {
        echo 'Unica Foto';
    }
    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}