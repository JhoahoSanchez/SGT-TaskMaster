<?php

function render()
{
    if (!isset($_SESSION["user"])) {
        header("location: ../view/login.php");
    } else {
        header("location: ../view/listaTareas.php");
    }
}

function login()
{
    echo "daisuki";
}

$op = (isset($_GET["op"])) ? $_GET["op"] : "render";

switch ($op) {
    case 'render':
        render();
        break;
    case 'login':
        login();
        break;
    default:
        echo "Error";
        break;
}

?>