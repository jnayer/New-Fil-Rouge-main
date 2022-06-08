<?php

namespace Eologie;

//use App\Controllers\UserController;

/** Class Router **/
class Router
{

    private string $url;
    private array $routes = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($path, $callable): object
    {
        $route = new Route($path, $callable);
        $this->routes["GET"][] = $route;
        return $route;
    }

    public function post($path, $callable): object
    {
        $route = new Route($path, $callable);
        $this->routes["POST"][] = $route;
        return $route;
    }

    public function run()
    {
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
            throw new \Exception('REQUEST_METHOD does not exist');
        }
        //boucle pour vérfier POST ou GET
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->match($this->url)) {
                return $route->call();
            }
        }
        // throw new \Exception('No matching routes');
        require VIEWS . '404.php';
    }

}
