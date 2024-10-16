<?php

require_once "./controllers/PessoaController.php";

$controller = new PessoaController();

$action = "listar";
if(isset($_GET["action"])) {
    $action = $_GET["action"];
}

//AÇÕES
switch ($action) {
    case "listar":
        $controller->selectAll();
        break;
    case "adicionar":
        $controller->novaPessoa();
        break;
    case "incert":
        $controller->insert($_POST);
        break;
}