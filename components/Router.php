<?php
//Все хорошо
class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //получить строку запроса
        $uri = $this->getURI();

        //проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            // если есть совпадение, определить какой контроллер и action обрабатывают запрос
            if (preg_match("~$uriPattern~", $uri)) {
                $regiments = explode('/', $path);
                $cname = array_shift($regiments);
                $controllerName = $cname . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($regiments));

                //подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }

                //создать обьект, вызвать метод(action)
                $controllerObject = new $controllerName($cname);
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
