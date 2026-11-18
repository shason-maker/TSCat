<?php
require_once 'config/db.php';
$connect = new connect();

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'home';
    $action = 'index';
}
require_once "view/layout.php";
?>
