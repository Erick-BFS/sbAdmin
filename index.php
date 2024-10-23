<?php

require_once("./controllers/UsuarioController.php");

$controller = new UsuarioController();

$action = "";
if ( isset( $_GET["action"] )) {
    $action = $_GET["action"];
} 

if ($action == "login") {
    if ( isset( $_POST["email"] ) && isset( $_POST["senha"] )) {
        $controller->login($_POST);
    }
} else {
    header("Location: ./login.php");
    exit;
}