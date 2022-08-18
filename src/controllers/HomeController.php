<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Zilton']);
    }

    public function sobre() {
        $this->render('sobre');
    }
    public function fotos() {
        $this->render('fotos');
    }
    public function foto($parametro) {
       echo "Acessando a foto: ".$parametro['nome'];
    }
    public function teste() {
        $this->render('teste');
    }

    public function sobreP($args) {
        print_r($args);
    }

}