<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $dados['home'] = true;

        $this->loadTemplate('home', $dados);
    }

}