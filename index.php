<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:15
 */

$controller = 'index';

if(isset($_GET['c']) && !empty($_GET['c'])) {
    $controller = trim($_GET['c']);
}

$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = 'controllers/' . $controllerClass . '.php';


if(!file_exists($controllerFile)) {
    echo 'Невірний параметр "c"!';
    echo '<br />';
    echo '<a href="/" title="Повернутись на головну">Повернутись на головну</a>';
    exit;
}

require_once $controllerFile;
$controller = new $controllerClass();

$action = 'getAllData';
if(isset($_GET['a']) && !empty($_GET['a'])) {
    $action = trim($_GET['a']);
}

if(!method_exists($controller, $action)) {
    echo 'Невірний параметр "a"!';
    echo '<br />';
    echo '<a href="/" title="Повернутись на головну">Повернутись на головну</a>';
    exit;
}

$controller->$action();
