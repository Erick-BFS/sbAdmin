<?php

require_once "./controllers/PessoaController.php";

$controller = new PessoaController();

$action = "listar";
if(isset($_GET["action"])) {
    $action = $_GET["action"];
}

//AÇÕES
if($action == "listar") {
    $controller->selectAll();
}