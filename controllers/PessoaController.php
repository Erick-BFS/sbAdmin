<?php

require_once "./models/pessoa.php";

class PessoaController {
    protected $model;

    function __construct() {
        $this->model = new Pessoa();
    }

    function selectAll() {
        $result = $this->model->selectAll();
        require("./views/pessoaList.php");
    }
}