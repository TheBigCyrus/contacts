<?php
require_once "model/db.php";

date_default_timezone_set('Asia/Tehran');
$request = $_SERVER['REQUEST_URI'];

if (isset($_GET['id']))
{
    $id = $_GET['id'];
}

switch ($request){
    case '/contacts/':
        require "controler/index.php";
        break;

        case "/contacts/edit":
            require "controler/edit.php";
            break;

        case "/contacts/add":
            require "controler/add.php";
            break;

        case "/contacts/del?id=$id":
            require "controler/del.php";
            break;
    

    default:
        die("404");
}
?>