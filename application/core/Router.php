<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

class Router {

    const kControllerNameIndex = 1;
    const kActionNameIndex = 2;
    const kDefaultControllerName = 'Main';
    const kDefaultActionName = 'index';

    static function start() {

        $controllerName = Router::kDefaultControllerName;
        $actionName = Router::kDefaultActionName;

        $uriPath = explode('?', $_SERVER['REQUEST_URI']);
        $routes = explode('/', $uriPath[0]);

        if ( !empty($routes[Router::kControllerNameIndex]) ) {
            $controllerName = strtolower($routes[Router::kControllerNameIndex]);
        }

        if ( !empty($routes[Router::kActionNameIndex]) ) {
            $actionName = strtolower($routes[Router::kActionNameIndex]);
        }

        $modelFullName = ucfirst($controllerName).'Model';
        $modelFilePath = Config::PATH_MODELS.$modelFullName.".php";

        if (file_exists($modelFilePath)) {
            require_once $modelFilePath;
        }

        $controllerFullName = ucfirst($controllerName).'Controller';
        $controllerFilePath = Config::PATH_CONTROLLERS.$controllerFullName.".php";

        if (file_exists($controllerFilePath)) {
            require_once $controllerFilePath;
        } else {
            Router::showPage404();
        }

        $controller = new $controllerFullName;
        $action = "action".ucfirst($actionName);

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Router::showPage404();
        }
    }

    static function showPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('Location:'.$host.'error/404');
    }
}
