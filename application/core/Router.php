<?php

class Router {

    const kControllerNameIndex = 1;
    const kActionNameIndex = 2;
    const kDefaultControllerName = 'Main';
    const kDefaultActionName = 'index';

    static function start() {

        $controllerName = Router::kDefaultControllerName;
        $actionName = Router::kDefaultActionName;

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if ( !empty($routes[Router::kControllerNameIndex]) ) {
            $controllerName = strtolower($routes[Router::kControllerNameIndex]);
        }

        if ( !empty($routes[Router::kActionNameIndex]) ) {
            $actionName = strtolower($routes[Router::kActionNameIndex]);
        }

        $modelFullName = ucfirst($controllerName).'Model';
        $modelFilePath = "application/models/".$modelFullName.".php";

        if (file_exists($modelFilePath)) {
            require_once $modelFilePath;
        }

        $controllerFullName = ucfirst($controllerName).'Controller';
        $controllerFilePath = "application/controllers/".$controllerFullName.".php";

        if (file_exists($controllerFilePath)) {
            require_once $controllerFilePath;
        } else {
            Router::showPage404();
        }

        $controller = new $controllerFullName;
        $action = "action_".$actionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Router::showPage404();
        }
    }

    static function showPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'error/404');
    }
}
