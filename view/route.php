<?php
require_once __DIR__ . '/../controller/Home.php';

switch ($controller) {
    case 'home':
        $controllerInstance = new Home();
        break;
    default:
        $controllerInstance = new Home();
        break;
}

if (isset($controllerInstance) && method_exists($controllerInstance, $action)) {
    $controllerInstance->$action();
}
