<?php

namespace Eologie;

class Route
{

    private string $path;
    private string $callable;
    private array $matches = [];
    private array $params = [];

    public function __construct($path, $callable)
    {
        $this->path = trim($path, '/');
        $this->callable = $callable;
    }

    public function match($url): bool
    {
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if (!preg_match($regex, $url, $matches)) {
            return false;
        }
        array_shift($matches);
        $this->matches = $matches;
        return true;
    }

    public function call()
    {
        $rep = explode("@", $this->callable);
        //$rep[0] contient le controller
        $controller = "Eologie\\Controllers\\" . $rep[0];
        $controller = new $controller();
        //$rep[1] contient la méthode
        //Appel de la méthode $controller->$rep[1] avec $this->matches comme arguments
        return call_user_func_array([$controller, $rep[1]], $this->matches);
    }

}
