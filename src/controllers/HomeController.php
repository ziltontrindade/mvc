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
    public function teste() {
        $this->render('teste');
    }

    public function sobreP($args) {
        print_r($args);
    }

}