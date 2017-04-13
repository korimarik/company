<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:15
 */

$controller = 'index';  // default controller name

if(isset($_GET['c']) && !empty($_GET['c'])) {
    $controller = trim($_GET['c']); // set current controller name, if sent parametr 'c'
}

$controllerClass = ucfirst($controller) . 'Controller'; // create controller class name
$controllerFile = 'controllers/' . $controllerClass . '.php'; // create controller file name


// handle controller's file existing
if(!file_exists($controllerFile)) {
    echo 'Невірний параметр "c"!';
    echo '<br />';
    echo '<a href="/" title="Повернутись на головну">Повернутись на головну</a>';
    exit;
}


require_once $controllerFile; // require controller's file
$controller = new $controllerClass(); // create controller object

$action = 'getAllData'; // default action
if(isset($_GET['a']) && !empty($_GET['a'])) {
    $action = trim($_GET['a']); // set current action name, if sent parametr 'a'
}

// handle method existing of the controller
if(!method_exists($controller, $action)) {
    echo 'Невірний параметр "a"!';
    echo '<br />';
    echo '<a href="/" title="Повернутись на головну">Повернутись на головну</a>';
    exit;
}

// calling controller's method
$controller->$action();
